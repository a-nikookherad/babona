<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Filament\Admin\Resources\ProductResource;
use App\Filament\Traits\SaveImage;
use App\Models\File;
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
        if ($data["thumbnail"]) {
            $this->attachImage($product, $data["thumbnail"], "thumbnail");
        }
        foreach ($data['attachments'] ?? [] as $attachment) {
            $this->attachImage($product, $attachment, 'attachment');
        }

        return $product;
    }
}
