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

        $product = ProductRepo::store($productData);

        foreach ($request->product_details as $productDetail) {
            $productDetail = array_merge($productDetail, ["add_by_user_id" => $currentUser->id]);
            $productDetail = array_merge($productDetail, [
                "product_id" => $product->id,
                "merchant_id" => $currentUser->merchant_id,
            ]);
            ProductDetailRepo::store($productDetail);
        }

        //when user set thumbnail for product
        if ($thumbnail) {
            $thumbnailPath = config("production.product_thumbnail_storage_path");
            $thumbnail = Attachment::
            setData($thumbnail, $thumbnailPath, "thumbnail", $product->id, $product->fa_name)
                ->store();
            $product->thumbnail()->save($thumbnail);
        }

        //when choose some pictures for product
        if ($images) {
            foreach ($images as $image) {
                $productImagesPath = config("production.product_images_storage_path");
                $attachment = Attachment::
                setData($image, $productImagesPath, "image")
                    ->store();
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

        //todo analyse how this work
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
}
