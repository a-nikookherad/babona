<?php

namespace App\Filament\Enums;

use Filament\Support\Contracts\HasLabel;

enum CategoryStatusEnum: string implements HasLabel
{
    case WAITING = "waiting";
    case PUBLISHED = "published";
    case ARCHIVE = "archive";

    public function getLabel(): ?string
    {
        $map = [
            "waiting" => "در انتظار",
            "published" => "منتشر شده",
            "archive" => "بایگانی",
        ];
        return $map[$this->value];
    }
}
