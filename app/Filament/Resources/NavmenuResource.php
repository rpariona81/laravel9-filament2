<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavmenuResource\Pages;
use App\Filament\Resources\NavmenuResource\RelationManagers;
use App\Filament\Resources\RoleMenuResource\RelationManagers\RolesMenusRelationManager;
use App\Models\Navmenu;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Closure;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

use Filament\Tables\Columns\TextColumn;



class NavmenuResource extends Resource
{
    protected static ?string $model = Navmenu::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('menu')->required()->reactive()
                ->afterStateUpdated(function (Closure $set, $state) {
                    $set('slug', Str::slug($state));
                }),
                TextInput::make('slug'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('menu'),
                TextColumn::make('slug')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RolesMenusRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNavmenus::route('/'),
            'create' => Pages\CreateNavmenu::route('/create'),
            'edit' => Pages\EditNavmenu::route('/{record}/edit'),
        ];
    }
}
