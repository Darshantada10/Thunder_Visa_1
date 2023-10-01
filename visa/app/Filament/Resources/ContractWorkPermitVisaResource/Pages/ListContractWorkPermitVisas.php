<?php

namespace App\Filament\Resources\ContractWorkPermitVisaResource\Pages;

use App\Filament\Resources\ContractWorkPermitVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContractWorkPermitVisas extends ListRecords
{
    protected static string $resource = ContractWorkPermitVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
