<?php

namespace App\Filament\Resources\SocialTagsResource\Pages;

use App\Filament\Resources\SocialTagsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialTags extends ListRecords
{
    protected static string $resource = SocialTagsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
