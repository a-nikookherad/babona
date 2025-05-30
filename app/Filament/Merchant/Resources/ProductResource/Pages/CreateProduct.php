<?php

namespace App\Filament\Merchant\Resources\ProductResource\Pages;

use App\Filament\Merchant\Resources\ProductResource;
use App\Models\File;
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
