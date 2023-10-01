<?php

namespace App\Filament\Resources\LogoResource\Pages;

use App\Filament\Resources\LogoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\ImageManagerStatic as Image;

class CreateLogo extends CreateRecord
{
    protected static string $resource = LogoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $image['logo'] = $data['logo'];

    $image['logo'] = pathinfo($image['logo'], PATHINFO_FILENAME);

    $webpFilename['logo'] = $image['logo'] . '.webp';

    $img = Image::make("storage/" . $data['logo']);

    $publicPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/';
    $img->save($publicPath . $webpFilename['logo'], 80, 'webp');

    return $webpFilename;
}

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
