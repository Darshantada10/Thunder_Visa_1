<?php

namespace App\Filament\Resources\SocialTagsResource\Pages;

use App\Filament\Resources\SocialTagsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialTags extends CreateRecord
{
    protected static string $resource = SocialTagsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
