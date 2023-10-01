<?php

namespace App\Filament\Resources\WorkPermitVisaResource\Pages;

use App\Filament\Resources\WorkPermitVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkPermitVisas extends ListRecords
{
    protected static string $resource = WorkPermitVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
