<?php

namespace App\Filament\Resources\TalentPassportVisaResource\Pages;

use App\Filament\Resources\TalentPassportVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTalentPassportVisa extends EditRecord
{
    protected static string $resource = TalentPassportVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
