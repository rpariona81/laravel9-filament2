<?php

namespace App\Filament\Resources\NavmenuResource\Pages;

use App\Filament\Resources\NavmenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavmenu extends EditRecord
{
    protected static string $resource = NavmenuResource::class;

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
