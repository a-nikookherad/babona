<?php

namespace Production\Traits;

use Attachment\Attachment;
use Production\Entities\Repositories\detail\ProductDetailRepo;
use Production\Entities\Repositories\product\ProductRepo;

trait ProductTrait
{

    public function createProduct($request)
    {
        $currentUser = auth()->user();

        $productData = $this->getProductData($request);

        $product = ProductRepo::store($productData);

        $this->handleProductDetails($request, $product, $currentUser);

        $this->handleProductThumbnail($request, $product);

        $this->handleProductImages($request, $product);

        return $product;
    }

    public function editProduct($product_id, $request)
    {
        $currentUser = auth()->user();

        $productData = $this->getProductData($request);

        ProductRepo::update($product_id, $productData);

        $product = ProductRepo::getById($product_id, ["productDetails", "thumbnail", "attachments"]);

        $this->handleProductDetails($request, $product, $currentUser);

        $this->handleProductThumbnail($request, $product);

        $this->handleProductImages($request, $product);

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

    private function handleProductDetails($request, $product, $currentUser): void
    {
        foreach ($request->product_details as $productDetail) {
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
}
