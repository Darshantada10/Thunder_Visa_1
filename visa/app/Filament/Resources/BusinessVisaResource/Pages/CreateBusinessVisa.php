<?php

namespace App\Filament\Resources\BusinessVisaResource\Pages;

use App\Filament\Resources\BusinessVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\ImageManagerStatic as Image;

class CreateBusinessVisa extends CreateRecord
{
    protected static string $resource = BusinessVisaResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $image['image'] = $data['image'];
    
        $image['image'] = pathinfo($image['image'], PATHINFO_FILENAME);
    
        $webpFilename['image'] = $image['image'].'.webp';
        $webpFilename['title'] = $data['title'];
        $webpFilename['content'] = $data['content'];    
        $webpFilename['points'] = $data['points'];    

        $img = Image::make("storage/" . $data['image']);
    
        $publicPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/';
        $img->save($publicPath . $webpFilename['image'], 80, 'webp');
    
        return $webpFilename;
    }
    
        protected function getRedirectUrl(): string
        {
            return $this->getResource()::getUrl('index');
        }
}
