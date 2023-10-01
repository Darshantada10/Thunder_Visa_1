<?php

namespace App\Filament\Resources\StudentVisaResource\Pages;

use App\Filament\Resources\StudentVisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Intervention\Image\ImageManagerStatic as Image;

class CreateStudentVisa extends CreateRecord
{
    protected static string $resource = StudentVisaResource::class;
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
