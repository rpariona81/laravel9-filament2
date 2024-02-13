<?php

namespace App\Filament\Resources\NavmenuResource\Pages;

use App\Filament\Resources\NavmenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNavmenu extends CreateRecord
{
    protected static string $resource = NavmenuResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
