<?php

namespace App\Filament\Admin\Resources\MerchantResource\Pages;

use App\Filament\Admin\Resources\MerchantResource;
use App\Filament\Traits\SaveImage;
use App\Models\Merchant;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMerchant extends CreateRecord
{
    use SaveImage;

    protected static string $resource = MerchantResource::class;

    protected function handleRecordCreation(array $data): Merchant
    {
//        dd($data);
        $merchant = Merchant::query()
            ->create($data);
        if ($data["image"]) {
            $this->attachImage($merchant, $data["image"], "image");
        }

        if ($data["users"]) {
            $sync = [];
            foreach ($data["users"] as $user) {
                $sync[$user["user_id"]] = ["role" => $user["role"]];
            }
            $merchant->users()->sync($sync);
        }
        return $merchant;
    }
}
