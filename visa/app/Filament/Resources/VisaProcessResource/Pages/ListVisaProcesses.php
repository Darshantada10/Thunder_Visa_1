<?php

namespace App\Filament\Resources\VisaProcessResource\Pages;

use App\Filament\Resources\VisaProcessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisaProcesses extends ListRecords
{
    protected static string $resource = VisaProcessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
