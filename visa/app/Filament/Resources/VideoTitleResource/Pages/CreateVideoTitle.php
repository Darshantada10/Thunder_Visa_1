<?php

namespace App\Filament\Resources\VideoTitleResource\Pages;

use App\Filament\Resources\VideoTitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVideoTitle extends CreateRecord
{
    protected static string $resource = VideoTitleResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
