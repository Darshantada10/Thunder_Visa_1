<?php

namespace App\Filament\Resources\ProfessionalVisaResource\Pages;

use App\Filament\Resources\ProfessionalVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfessionalVisas extends ListRecords
{
    protected static string $resource = ProfessionalVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
