<?php

namespace Production;

use App\Models\Attachment;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Production\Traits\CategoryTrait;
use Production\Traits\PriceTrait;
use Production\Traits\ProductTrait;
use Production\Traits\BasketTrait;
use Production\Traits\StorehouseTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, StorehouseTrait, PriceTrait, BasketTrait;

    public function createCategory($request)
    {
        $data = $request->only([
            "slug",
            "name",
            "fa_name",
            "description",
            "status",
            "jsonld",
            "parent_id",
        ]);
        $category = $this->addCategory($data);
        $thumbnail = $request->file("thumbnail");
        if (!$thumbnail) {
            return $category;
        }
        $fileConfigPath = config("production.category_thumbnail_path_from_public");
        $fileName = $category->id;
        $fileExtension = $thumbnail->getClientOriginalExtension();
        $attachment = new Attachment();
        $attachment->name = "thumbnail";
        $attachment->path = storage_path("app/public/") . ltrim($fileConfigPath, "/");
        $attachment->file_name = $fileName;
        $attachment->extension = $fileExtension;
        $attachment->alt = $request->fa_name;
        $category->attachments()->save($attachment);

        if ($category->exists) {
            //store avatar to filesystem
            Storage::disk("public")->putFileAs($fileConfigPath, $thumbnail, $fileName . "." . $fileExtension);
        }
    }

    public function createProduct(array $data)
    {
        $data = collect($data);
        $productCollection = $data->only([
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
            "user_id",
            "category_id",
        ]);
        $storehouseCollection = $data->only([
            "color",
            "size",
            "quantity",
            "is_active",
            "add_by_user_id",
        ]);
        $priceCollection = $data->only([
            "price",
            "wallet_id",
            "discount",
            "expired_at",
        ]);
        $tagCollection = $data->only([
            "tag_name",
            "tag_description",
            "keywords",
        ]);
        $attachmentCollection = $data->only([
            "path",
            "file_name",
            "extension",
            "alt",
            "is_thumbnail",
            "file_size",
        ]);
        $campaignCollection = $data->only([
            "campaign_id"
        ]);
        try {
            DB::beginTransaction();
            $currentUser = auth()->user();
            $productCollection->put("user_id", $currentUser->id);
            $product = $this->addProduct($productCollection->toArray());

            //add attachments to product
            /*            $attachment = new Attachment($attachmentData);
                        $product->attachments()->save($attachment);*/

            //add tags to product
            $tag = new Tag();
            $tag->name = $tagCollection->get("tag_name");
            $tag->description = $tagCollection->get("tag_description");
            $tag->keywords = $tagCollection->get("keywords");
            $product->tags()->save($tag);

            //add storehouse to product
            $storehouseCollection->put("user_id", $currentUser->id);
            $storehouseCollection->put("add_by_user_id", $currentUser->id);
            $storehouseCollection->put("product_id", $product->id);
            $storehouse = $this->addStorehouse($storehouseCollection->toArray());

            //add price to storehouse
            $priceCollection->put("storehouse_id", $storehouse->id);
            $price = $this->addPrice($priceCollection->toArray());

            //add campaign to price


            DB::commit();
            return $product;
        } catch (\Throwable $exception) {
            DB::rollBack();
            dd($exception->getMessage(), $exception->getFile(), $exception->getCode());
        }
    }
}
