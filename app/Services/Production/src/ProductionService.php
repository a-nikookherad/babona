<?php

namespace Production;

use App\Models\Attachment;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Traits\CategoryTrait;
use Production\Traits\PriceTrait;
use Production\Traits\ProductTrait;
use Production\Traits\BasketTrait;
use Production\Traits\StorehouseTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, StorehouseTrait, PriceTrait, BasketTrait;

    public function createProduct($request)
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
            "user_id",
            "category_id",
        ]);
        $storehouseData = $request->product_details;
        $storehouseData = [];
        foreach ($storehouseData as $storehouseDatum) {
//            $storehouse=
            ["color",
                "size",
                "quantity",
                "wallet_id"=>[1, 2],
                "add_by_user_id",
            ];

        }
        $priceData = $request->only([
            "price",
            "wallet_id",
            "discount",
            "expired_at",
        ]);
        $tagData = $request->only([
            "tag_name",
            "tag_description",
            "keywords",
        ]);
        $attachmentData = $request->only([
            "path",
            "file_name",
            "extension",
            "alt",
            "is_thumbnail",
            "file_size",
        ]);
        $campaignData = $request->only([
            "campaign_id"
        ]);
        try {
            DB::beginTransaction();
            $currentUser = auth()->user();
            $productData->put("user_id", $currentUser->id);
            $product = $this->addProduct($productData->toArray());

            //add attachments to product
            /*            $attachment = new Attachment($attachmentData);
                        $product->attachments()->save($attachment);*/

            //add tags to product
            $tag = new Tag();
            $tag->name = $tagData->get("tag_name");
            $tag->description = $tagData->get("tag_description");
            $tag->keywords = $tagData->get("keywords");
            $product->tags()->save($tag);

            //add storehouse to product
            $storehouseData->put("user_id", $currentUser->id);
            $storehouseData->put("add_by_user_id", $currentUser->id);
            $storehouseData->put("product_id", $product->id);
            $storehouse = $this->addStorehouse($storehouseData->toArray());

            //add price to storehouse
            $priceData->put("storehouse_id", $storehouse->id);
            $price = $this->addPrice($priceData->toArray());

            DB::commit();
            return $product;
        } catch (\Throwable $exception) {
            DB::rollBack();
            dd($exception->getMessage(), $exception->getFile(), $exception->getCode());
        }
    }

    private function storeFile($category, $thumbnail, $alt = ""): void
    {
        try {
            DB::beginTransaction();

            //create attachment for database
            $attachment = new Attachment();
            $attachment->name = "thumbnail";
            $attachment->absolute_path = storage_path(config("production.category_thumbnail_storage_path"));
            $attachment->relative_path = config("production.category_thumbnail_public_path");
            $attachment->file_name = $category->id;
            $attachment->extension = $thumbnail->getClientOriginalExtension();
            $attachment->alt = $alt;
            $category->thumbnail()->save($attachment);

            $file = $category->id . "." . $attachment->extension;
            $junkFile = $attachment->absolute_path . DIRECTORY_SEPARATOR . $file;
            $this->storeFileToFilesystem($thumbnail, $file, $junkFile);

            DB::commit();
        } catch (\Throwable $exception) {
            DB::rollBack();
            throw($exception);
        }
    }

    private function storeFileToFilesystem($thumbnail, string $fileName, string $junkFile): void
    {
        if (file_exists($junkFile)) {
            unlink($junkFile);
        }

        //store thumbnail pic to filesystem
        Storage::disk("storage")->putFileAs(config("production.category_thumbnail_storage_path"), $thumbnail, $fileName);
    }
}
