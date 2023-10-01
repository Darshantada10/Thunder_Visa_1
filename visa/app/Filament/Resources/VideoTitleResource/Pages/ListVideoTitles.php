<?php

namespace App\Filament\Resources\VideoTitleResource\Pages;

use App\Filament\Resources\VideoTitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoTitles extends ListRecords
{
    protected static string $resource = VideoTitleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
