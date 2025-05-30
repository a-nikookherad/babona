<?php

namespace App\Filament\Enums;

use Filament\Support\Contracts\HasLabel;

enum MerchantRoleEnum: string implements HasLabel
{
    case SUPER_ADMIN = "super_admin";
    case ADMIN = "admin";
    case SUPPORT = "support";

    public function getLabel(): ?string
    {
        $map = [
            self::SUPER_ADMIN->value => "مدیر ارشد",
            self::ADMIN->value => "مدیر",
            self::SUPPORT->value => "پشتیبانی",
        ];
        return $map[$this->value];
    }
}
