<?php

namespace App\Filament\Admin\Resources\AboutSliderResource\Pages;

use App\Filament\Admin\Resources\AboutSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutSliders extends ListRecords
{
    protected static string $resource = AboutSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
