<?php

namespace Production;

use App\Models\Tag;
use Attachment\Attachment;
use Illuminate\Support\Facades\DB;
use Production\Entities\Repositories\detail\ProductDetailRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Traits\BasketTrait;
use Production\Traits\CategoryTrait;
use Production\Traits\PriceTrait;
use Production\Traits\ProductTrait;
use Production\Traits\StorehouseTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, StorehouseTrait, PriceTrait, BasketTrait;

    public function createProduct($request)
    {
        $currentUser = auth()->user();
        $thumbnail = $request->file("thumbnail");
        $images = $request->file("images");
        $request->merge(["add_by_user_id" => $currentUser->id]);
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
            "add_by_user_id",
        ]);

        $product = ProductRepo::store($productData);

        foreach ($request->product_details as $productDetail) {
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
}
