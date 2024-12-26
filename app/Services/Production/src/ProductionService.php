<?php

namespace Production;

use Attachment\Attachment;
use Production\Entities\Repositories\detail\ProductDetailRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Traits\BasketTrait;
use Production\Traits\CategoryTrait;
use Production\Traits\ProductDetailTrait;
use Production\Traits\ProductTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, ProductDetailTrait, BasketTrait;

    public function createProduct($request)
    {
        $currentUser = auth()->user();

        $images = $request->file("images");
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

        $product = ProductRepo::store($productData);

        $this->handleProductDetails($request, $product, $currentUser);

        //when user set thumbnail for product
        $thumbnail = $request->file("thumbnail");
        if ($thumbnail) {
            $thumbnailPath = config("production.product_thumbnail_storage_path");
            $thumbnail = Attachment::setAttachment()
                ->prepareAttributes($thumbnail, $thumbnailPath, "thumbnail", $product->id, $product->fa_name)
                ->storeFileToStorage()
                ->getAttachment();
            $product->thumbnail()->save($thumbnail);
        }

        //when choose some pictures for product
        if ($images) {
            foreach ($images as $image) {
                $productImagesPath = config("production.product_images_storage_path");
                $attachment = Attachment::setAttachment()
                    ->prepareAttributes($image, $productImagesPath, "image")
                    ->storeFileToStorage()
                    ->getAttachment();
                $product->attachments()->save($attachment);
            }
        }

        return $product;
    }

    public function editProduct($product_id, $request)
    {
        $currentUser = auth()->user();
        $thumbnail = $request->file("thumbnail");
        $images = $request->file("images");
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
            "category_id",
        ]);

        ProductRepo::update($product_id, $productData);
        $product = ProductRepo::getById($product_id, ["thumbnail", "attachments", "productDetails"]);

        foreach ($request->product_details as $productDetail) {
            $productDetail = array_merge($productDetail, ["add_by_user_id" => $currentUser->id]);
            $productDetail = array_merge($productDetail, [
                "product_id" => $product->id,
                "merchant_id" => $currentUser->merchant_id,
            ]);
            $condition = [
                "size" => $productDetail["size"],
                "color" => $productDetail["color"],
            ];
            ProductDetailRepo::updateOrCreate($condition, $productDetail);
        }

        //when user set thumbnail for product
        if ($thumbnail) {
            $thumbnailPath = config("production.product_thumbnail_storage_path");
            $thumbnail = Attachment::setAttachment($product->thumbnail)
                ->setData($thumbnail, $thumbnailPath, "thumbnail", $product->id, $product->fa_name)
                ->update();
            $product->thumbnail()->save($thumbnail);
        }

        //when choose some pictures for product
        if ($images) {
            foreach ($product->attachments as $attachment) {
                Attachment::setAttachment($attachment)
                    ->deleteFileFromStorage();
                $attachment->delete();
            }

            foreach ($images as $image) {
                $productImagesPath = config("production.product_images_storage_path");
                $attachment = Attachment::setData($image, $productImagesPath, "image")
                    ->store();
                $product->attachments()->save($attachment);
            }
        }

        return $product;
    }

    private function handleProductDetails($request, $product, $currentUser): void
    {
        foreach ($request->product_details as $productDetail) {

            $condition = [
                ["size", "=", $productDetail["size"]],
                ["color", "=", $productDetail["color"]],
                ["product_id", "=", $product->id],
            ];
            $oldProductDetail = ProductDetailRepo::getByCondition($condition, ["product", "soldCount"]);

            //can charge quantity if the product was mine
            if ($oldProductDetail && $oldProductDetail->merchant_id == $currentUser->merchant_id) {
                //continue or rise an error which is "you can't add this details for this product because you are not owner of this product"
                continue;
            }

            if ($oldProductDetail) {
                //get count of old one and add to new one
                $oldRemainCount = $oldProductDetail->quantity - $oldProductDetail->soldCount;
                $oldProductDetail->quantity = $oldProductDetail->quantity - $oldRemainCount;
                $oldProductDetail->save();
                $oldProductDetail->delete();

                $productDetail = array_merge($productDetail, ["quantity" => $oldRemainCount + $productDetail["quantity"]]);
            }


            $productDetail = array_merge($productDetail, ["add_by_user_id" => $currentUser->id]);
            $productDetail = array_merge($productDetail, [
                "product_id" => $product->id,
                "merchant_id" => $currentUser->merchant_id,
            ]);
            ProductDetailRepo::store($productDetail);
        }
    }
}
