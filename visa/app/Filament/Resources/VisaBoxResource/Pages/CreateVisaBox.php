<?php

namespace App\Filament\Resources\VisaBoxResource\Pages;

use App\Filament\Resources\VisaBoxResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\ImageManagerStatic as Image;

class CreateVisaBox extends CreateRecord
{
    protected static string $resource = VisaBoxResource::class;
    protected function mutateFormDataBeforeCreate(array $data):array
    {
        $image['image'] = $data['image'];
        $image['image'] = pathinfo($image['image'], PATHINFO_FILENAME);

        $webpFilename['image'] = $image['image'].'.webp';
        $webpFilename['title'] = $data['title'];
        $webpFilename['small_description'] = $data['small_description'];

        $img = Image::make("storage/".$data['image']);

        $publicpath = $_SERVER['DOCUMENT_ROOT'].'/storage/';
        $img->save($publicpath . $webpFilename['image'], 80, 'webp');


        return $webpFilename;

    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
