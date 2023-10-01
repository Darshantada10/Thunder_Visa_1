<?php

namespace App\Filament\Resources\VisitorVisaResource\Pages;

use App\Filament\Resources\VisitorVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorVisas extends ListRecords
{
    protected static string $resource = VisitorVisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
