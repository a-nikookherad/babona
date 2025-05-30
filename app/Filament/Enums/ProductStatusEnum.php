<?php

namespace App\Filament\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProductStatusEnum: string implements HasLabel
{
    case UPCOMING = "upcoming";
    case WAITING = "waiting";
    case PUBLISHED = "published";
    case ARCHIVE = "archive";

    public function getLabel(): ?string
    {
        $map = [
            "upcoming" => "بزودی",
            "waiting" => "در انتظار",
            "published" => "منتشر شده",
            "archive" => "بایگانی",
        ];
        return $map[$this->value];
    }
}
