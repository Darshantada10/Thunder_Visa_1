<?php

namespace App\Filament\Resources\TalentPassportWorkPermitVisaResource\Pages;

use App\Filament\Resources\TalentPassportWorkPermitVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTalentPassportWorkPermitVisas extends ListRecords
{
    protected static string $resource = TalentPassportWorkPermitVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
