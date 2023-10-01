<?php

namespace App\Filament\Resources\TouristVisaResource\Pages;

use App\Filament\Resources\TouristVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTouristVisas extends ListRecords
{
    protected static string $resource = TouristVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
