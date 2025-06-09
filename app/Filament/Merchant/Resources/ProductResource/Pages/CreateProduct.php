<?php

namespace App\Filament\Merchant\Resources\ProductResource\Pages;

use App\Filament\Merchant\Resources\ProductResource;
use App\Models\File;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductDetail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    const ATTACHMENT_TYPE = "product";
    protected static string $resource = ProductResource::class;

    /*    protected function mutateFormDataBeforeCreate(array $data): array
        {
    //         dd($data);
            return $data;
        }*/

    protected function handleRecordCreation(array $data): Product
    {
        $product = Product::create($data);

        if ($data["product_details"]) {
            foreach ($data["product_details"] as $product_detail) {
                $productDetails = new ProductDetail();
                $productDetails->size = $product_detail["size"];
                $productDetails->color = $product_detail["color"];
                $productDetails->price = $product_detail["price"];
                $productDetails->tax = $product_detail["tax"];
                $productDetails->discount = $product_detail["discount"];
                $productDetails->discount_expired_at = $product_detail["discount_expired_at"];
                $productDetails->product_id = $product->id;
                $productDetails->save();

                if ($product_detail["stock"]) {
                    $inventory = new Inventory();
                    $inventory->stock = $product_detail["stock"];
                    $inventory->save();
                }
            }

        }

        if ($data["thumbnail"]) {
            File::create([
                'attachable_type' => self::ATTACHMENT_TYPE,
                'attachable_id' => $product->id,
                'title' => 'thumbnail',
                'path' => $data["thumbnail"],
                'name' => pathinfo($data['thumbnail'], PATHINFO_FILENAME),
                'full_name' => $data['thumbnail'],
                'extension' => pathinfo($data['thumbnail'], PATHINFO_EXTENSION),
            ]);
        }
        foreach ($data['attachments'] ?? [] as $attachment) {
            File::create([
                'attachable_type' => self::ATTACHMENT_TYPE,
                'attachable_id' => $product->id,
                'title' => 'attachment',
                'path' => $attachment,
                'name' => pathinfo($attachment, PATHINFO_FILENAME),
                'full_name' => $attachment,
                'extension' => pathinfo($attachment, PATHINFO_EXTENSION),
            ]);
        }

        return $product;
    }
}
