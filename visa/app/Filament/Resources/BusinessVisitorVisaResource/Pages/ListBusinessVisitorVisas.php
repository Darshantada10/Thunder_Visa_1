<?php

namespace App\Filament\Resources\BusinessVisitorVisaResource\Pages;

use App\Filament\Resources\BusinessVisitorVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBusinessVisitorVisas extends ListRecords
{
    protected static string $resource = BusinessVisitorVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
