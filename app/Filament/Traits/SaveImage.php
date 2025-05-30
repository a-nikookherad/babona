<?php

namespace App\Filament\Traits;

use App\Models\File;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;

trait SaveImage
{
    private $map = [
        Merchant::class => "merchant",
        User::class => "user",
        Product::class => "product",
    ];

    protected function attachImage($model, $uploadedImage, $title): void
    {
        File::create([
            'attachable_type' => $this->map[get_class($model)],
            'attachable_id' => $model->id,
            'title' => $title,
            'path' => $uploadedImage,
            'name' => pathinfo($uploadedImage, PATHINFO_FILENAME),
            'full_name' => $uploadedImage,
            'extension' => pathinfo($uploadedImage, PATHINFO_EXTENSION),
        ]);
    }
}
