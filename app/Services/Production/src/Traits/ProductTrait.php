<?php

namespace Production\Traits;

use Attachment\Attachment;
use Production\Entities\Repositories\basket\BasketRepo;
use Production\Entities\Repositories\detail\ProductDetailRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Entities\Repositories\return\ReturnProductRepo;
use Production\Production;
use Symfony\Component\Finder\Exception\AccessDeniedException;

trait ProductTrait
{
    public function products(callable $filter, int $perPage = 10)
    {
        return ProductRepo::getByFilterPaginate($filter, $perPage);
    }

    public function createProduct($request, $currentUser)
    {
        $productData = $this->getProductData($request);

        $product = ProductRepo::store($productData);

        $this->handleProductDetails($request, $product, $currentUser);

        $this->handleProductThumbnail($request, $product);

        $this->handleProductImages($request, $product);

        $this->handleProductTags($request, $product);

        return $product;
    }

    public function editProduct($product_id, $request, $currentUser)
    {
        $productData = $this->getProductData($request);

        ProductRepo::update($product_id, $productData);

        $product = ProductRepo::getById($product_id, ["productDetails", "thumbnail", "attachments"]);

        $this->handleProductDetails($request, $product, $currentUser);

        $this->handleProductThumbnail($request, $product);

        $this->handleProductImages($request, $product);

        $this->handleProductTags($request, $product);

        return $product;
    }

    public function destroyProduct($product)
    {
        $allow = true;
        foreach ($product->productDetails as $productDetail) {
            if ($productDetail->hasPaidBaskets()) {
                $allow = false;
            }
        }

        if ($allow) {
            $product->delete();
        }

        return $allow;
    }

    public function requestToReturnProduct($request)
    {
        $basket = BasketRepo::getById($request->basket_id);
        if ($basket->bought_at === null) {
            throw new AccessDeniedException("You can't return the basket which was not bought");
        }

        //get return product data
        $data = $request->only([
            "reason",
            "description",
            "request_at",
            "return_at",
            "basket_id",
        ]);
        $returnProduct = ReturnProductRepo::store($data);

        //set attachment data
        $returnProductImagePath = config("production.request_to_return_product_images") . DIRECTORY_SEPARATOR . $returnProduct->id;
        foreach ($request->file("attachments") as $attachmentFile) {
            $attachment = Attachment::setAttachment()
                ->prepareAttributes($attachmentFile, $returnProductImagePath, "attachment")
                ->storeFileToStorage()
                ->getAttachment();
            $returnProduct->attachments()->save($attachment);
        }
    }

    private function getProductData($request): mixed
    {
        $productData = $request->only([
            "slug",
            "name",
            "fa_name",
            "material",
            "style",
            "code",
            "barcode",
            "status",
            "brief",
            "description",
            "jsonld",
            "meta_tag_title",
            "meta_tag_description",
            "meta_tag_keywords",
            "category_id",
        ]);
        return $productData;
    }

    private function handleProductDetails($request, $product, $currentUser): void
    {
        switch ($request->discount_option) {
            case 2:
                $discount = $request->discount_percentage;
                break;
            case 3:
                $discount = $request->discount / $request->price;
                break;
            default:
                $discount = 0;

        }
        foreach ($request->product_details as $productDetail) {
            $productDetail = array_merge($productDetail, [
                "price" => $request->price,
                "discount" => $discount,
            ]);
            $condition = [
                ["size", "=", $productDetail["size"]],
                ["color", "=", $productDetail["color"]],
                ["product_id", "=", $product->id],
            ];
            $oldProductDetail = ProductDetailRepo::getByCondition($condition, ["soldCount"]);

            //can charge quantity if the product was mine
            if ($oldProductDetail && $oldProductDetail->merchant_id != $currentUser->merchant_id) {
                //continue or rise an error which is "you can't add this details for this product because you are not owner of this product"
                continue;
            }

            //get quantity of old product details and add to new product details
            if ($oldProductDetail) {
                //get count of old one and add to new one
                $oldRemainCount = $oldProductDetail->quantity - $oldProductDetail->soldCount->sum("pivot.quantity");
                $oldProductDetail->quantity = $oldProductDetail->quantity - $oldRemainCount;
                $oldProductDetail->quantity_remain_before_deleting = $oldRemainCount;
                $oldProductDetail->save();
                $oldProductDetail->delete();

                $productDetail = array_merge($productDetail, [
                    "quantity_add_from_prev" => $oldRemainCount,
                    "quantity" => $productDetail["quantity"] + $oldRemainCount
                ]);
            }

            $productDetail = array_merge($productDetail, [
                "product_id" => $product->id,
                "merchant_id" => $currentUser->merchant_id,
                "add_by_user_id" => $currentUser->id,
            ]);
            ProductDetailRepo::store($productDetail);
        }
    }

    private function handleProductThumbnail($request, $product): void
    {
        $thumbnail = $request->file("thumbnail");
        if (!$thumbnail) {
            return;
        }

        $thumbnailPath = config("production.product_thumbnail_storage_path");

        //create new attachment
        if (!$product->thumbnail) {
            $attachment = Attachment::setAttachment()
                ->prepareAttributes($thumbnail, $thumbnailPath, "thumbnail", $product->id, $product->fa_name)
                ->storeFileToStorage()
                ->getAttachment();
            $product->thumbnail()->save($attachment);
            return;
        }

        //update exists attachment
        Attachment::setAttachment($product->thumbnail)
            ->deleteFileFromStorage()
            ->prepareAttributes($thumbnail, $thumbnailPath, "thumbnail", $product->id, $product->fa_name)
            ->storeFileToStorage()
            ->update();
    }

    private function handleProductImages($request, $product): void
    {
        $images = $request->file("images");
        if (!$images) {
            return;
        }

        //delete old attachments if exists
        if ($product->attachments) {
            foreach ($product->attachments as $attachment) {
                Attachment::setAttachment($attachment)
                    ->deleteFileFromStorage()
                    ->delete();
            }
        }

        //create attachments from uploaded files
        foreach ($images as $image) {
            $productImagesPath = config("production.product_images_storage_path") . DIRECTORY_SEPARATOR . $product->id;
            $attachment = Attachment::setAttachment()
                ->prepareAttributes($image, $productImagesPath, "image")
                ->storeFileToStorage()
                ->getAttachment();
            $product->attachments()->save($attachment);
        }
    }

    private function handleProductTags($request, $product): void
    {
        if (json_decode($request->filled("tags"))) {
            foreach (json_decode($request->tags, true) as $key => $tag) {
                tempTags($product)->unTag($tag["name"]??$tag);
                tempTags($product)->tagIt($tag["name"]??$tag, now()->addDays(7), ["description" => $tag["description"]??"Product's tags"]);
            }
        }
    }
}
