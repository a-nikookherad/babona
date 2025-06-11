<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Filament\Admin\Resources\ProductResource;
use App\Filament\Traits\SaveImage;
use App\Models\File;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductDetail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    use SaveImage;

    protected static string $resource = ProductResource::class;

    /*    protected function mutateFormDataBeforeCreate(array $data): array
        {
    //         dd($data);
            return $data;
        }*/

    protected function handleRecordCreation(array $data): Product
    {


        $product = Product::create($data);
        $productDetails = new ProductDetail();
        $productDetails->size = $data["size"];
        $productDetails->color = "";
        $productDetails->price = "";
        $productDetails->tax = "";
        $productDetails->discount = "";
        $productDetails->discount_expired_at = "";
        $productDetails->quantity_add_from_prev = "";
        $productDetails->quantity = "";
        $productDetails->quantity_remain_before_deleting = "";
        $productDetails->net_price = "";
        $productDetails->product_id = "";
        $productDetails->merchant_id = "";
        $productDetails->add_by_user_id = "";
        $this->storeThumbnail($data, $product);
        $this->storeAttachments($data, $product);

        $this->storeProductDetailsAndInventories($data, $product);

        return $product;
    }

    private function storeProductDetailsAndInventories(array $data, $product): void
    {
        if (empty($data["product_details"])) {
            return;
        }

        foreach ($data["product_details"] as $product_detail) {
            $productDetails["size"] = $product_detail["size"];
            $productDetails["color"] = $product_detail["color"];
            $productDetails["price"] = $product_detail["gross_price"];
            $productDetails["discount"] = $product_detail["discount"];
            $productDetails["discount_expired_at"] = $product_detail["discount_expired_at"];
            $productDetails["product_id"] = $product->id;
            $productDetails["merchant_id"] = $product_detail["merchant_id"];
            $productDetails["add_by_user_id"] = $product_detail["add_by_user_id"];
            $productDetails = ProductDetail::query()
                ->create($productDetails);
            $inventory["stock"] = $product_detail["stock"];
            $inventory["price"] = $product_detail["price"];
            $inventory["location"] = $product_detail["location"];
            $inventory["minimum_stock"] = 3;
            $inventory["add_by_user_id"] = $product_detail[""];
            $inventory["merchant_id"] = $product_detail[""];
            $inventory["product_detail_id"] = $productDetails->id;
            Inventory::query()
                ->create($inventory);
        }
    }

    private function storeThumbnail($data, $product): void
    {
        if (empty($data["thumbnail"])) {
            return;
        }

        $this->attachImage($product, $data["thumbnail"], "thumbnail");
    }

    private function storeAttachments($data, $product): void
    {
        if (empty($data["attachments"])) {
            return;
        }

        foreach ($data["attachments"] as $attachment) {
            $this->attachImage($product, $attachment, 'attachment');
        }
    }
}
