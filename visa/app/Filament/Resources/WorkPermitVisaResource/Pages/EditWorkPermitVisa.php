<?php

namespace App\Filament\Resources\WorkPermitVisaResource\Pages;

use App\Filament\Resources\WorkPermitVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkPermitVisa extends EditRecord
{
    protected static string $resource = WorkPermitVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
