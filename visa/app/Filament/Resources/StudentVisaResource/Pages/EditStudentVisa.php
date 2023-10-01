<?php

namespace App\Filament\Resources\StudentVisaResource\Pages;

use App\Filament\Resources\StudentVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentVisa extends EditRecord
{
    protected static string $resource = StudentVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
