<?php

namespace App\Filament\Enums;

use Filament\Support\Contracts\HasLabel;

enum UsersRoleEnum: string implements HasLabel
{
    case SUPER_ADMIN = "super_admin";
    case ADMIN = "admin";
    case ACCOUNTANT = "accountant";
    case CUSTOMER = "customer";
    case CARRIER = "carrier";

    public function getLabel(): ?string
    {
        $map = [
            "super_admin" => "مدیر ارشد",
            "admin" => "مدیر",
            "accountant" => "حسابدار",
            "customer" => "مشتری",
            "carrier" => "دلیوری",
        ];
        return $map[$this->value];
    }
}
