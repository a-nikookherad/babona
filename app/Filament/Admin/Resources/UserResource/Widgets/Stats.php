<?php

namespace App\Filament\Admin\Resources\UserResource\Widgets;

use Filament\Widgets\ChartWidget;

class Stats extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'widgets' => [
                // ...
                'default' => [
                    'account' => false, // Disables the account widget.
                    'info' => false, // Disables the info widget.
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
