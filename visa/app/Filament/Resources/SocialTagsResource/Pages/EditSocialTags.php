<?php

namespace App\Filament\Resources\SocialTagsResource\Pages;

use App\Filament\Resources\SocialTagsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialTags extends EditRecord
{
    protected static string $resource = SocialTagsResource::class;

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
