<?php

namespace App\Filament\Resources\VisaBoxResource\Pages;

use App\Filament\Resources\VisaBoxResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisaBoxes extends ListRecords
{
    protected static string $resource = VisaBoxResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
