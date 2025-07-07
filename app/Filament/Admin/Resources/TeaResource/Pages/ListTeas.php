<?php

namespace App\Filament\Admin\Resources\TeaResource\Pages;

use App\Filament\Admin\Resources\TeaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeas extends ListRecords
{
    protected static string $resource = TeaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
