<?php

namespace App\Filament\Resources\ProfessionalVisaResource\Pages;

use App\Filament\Resources\ProfessionalVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfessionalVisa extends EditRecord
{
    protected static string $resource = ProfessionalVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
