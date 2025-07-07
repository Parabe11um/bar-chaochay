<?php

namespace App\Filament\Admin\Resources\TeaResource\Pages;

use App\Filament\Admin\Resources\TeaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTea extends EditRecord
{
    protected static string $resource = TeaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
