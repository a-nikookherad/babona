<?php

namespace App\Filament\Merchant\Resources\UserResource\Pages;

use App\Filament\Merchant\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
//        dd($data);
        return $data;
    }
}
