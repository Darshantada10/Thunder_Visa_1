<?php

namespace App\Filament\Resources\VisaProcessResource\Pages;

use App\Filament\Resources\VisaProcessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisaProcess extends EditRecord
{
    protected static string $resource = VisaProcessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
