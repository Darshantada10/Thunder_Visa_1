<?php

namespace App\Filament\Resources\ContractWorkPermitVisaResource\Pages;

use App\Filament\Resources\ContractWorkPermitVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContractWorkPermitVisa extends EditRecord
{
    protected static string $resource = ContractWorkPermitVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
