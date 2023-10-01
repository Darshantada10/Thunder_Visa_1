<?php

namespace App\Filament\Resources\InternshipVisaResource\Pages;

use App\Filament\Resources\InternshipVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternshipVisas extends ListRecords
{
    protected static string $resource = InternshipVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
