<?php

namespace App\Filament\Resources\VideoTitleResource\Pages;

use App\Filament\Resources\VideoTitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideoTitle extends EditRecord
{
    protected static string $resource = VideoTitleResource::class;

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
