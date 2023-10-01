<?php

namespace App\Filament\Resources\ContactInformationResource\Pages;

use App\Filament\Resources\ContactInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactInformation extends ListRecords
{
    protected static string $resource = ContactInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
