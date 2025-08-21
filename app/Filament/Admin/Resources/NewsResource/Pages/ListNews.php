<?php

namespace App\Filament\Admin\Resources\NewsResource\Pages;

use App\Filament\Admin\Resources\NewsResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions; // <-- добавь

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Добавить новость'),
        ];
    }
}
