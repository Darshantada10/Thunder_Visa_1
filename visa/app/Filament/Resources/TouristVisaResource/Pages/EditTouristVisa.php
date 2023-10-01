<?php

namespace App\Filament\Resources\TouristVisaResource\Pages;

use App\Filament\Resources\TouristVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTouristVisa extends EditRecord
{
    protected static string $resource = TouristVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
