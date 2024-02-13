<?php

namespace App\Filament\Resources\NavmenuResource\Pages;

use App\Filament\Resources\NavmenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavmenus extends ListRecords
{
    protected static string $resource = NavmenuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
