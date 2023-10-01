<?php

namespace App\Filament\Resources\VisaProcessResource\Pages;

use App\Filament\Resources\VisaProcessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVisaProcess extends CreateRecord
{
    protected static string $resource = VisaProcessResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
