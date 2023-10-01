<?php

namespace App\Filament\Resources\BusinessVisitorVisaResource\Pages;

use App\Filament\Resources\BusinessVisitorVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusinessVisitorVisa extends EditRecord
{
    protected static string $resource = BusinessVisitorVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
