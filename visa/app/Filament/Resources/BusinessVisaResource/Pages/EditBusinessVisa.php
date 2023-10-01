<?php

namespace App\Filament\Resources\BusinessVisaResource\Pages;

use App\Filament\Resources\BusinessVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusinessVisa extends EditRecord
{
    protected static string $resource = BusinessVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
