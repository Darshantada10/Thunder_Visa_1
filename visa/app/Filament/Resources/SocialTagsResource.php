<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\SocialTags;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SocialTagsResource\Pages;
use App\Filament\Resources\SocialTagsResource\RelationManagers;

class SocialTagsResource extends Resource
{
    protected static ?string $model = SocialTags::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Design';
    protected static ?int $navigationSort = 3;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('instagram')
                    ->prefix('https://')->required(),
                    TextInput::make('facebook')
                    ->prefix('https://')->required(),
                    TextInput::make('twitter')
                    ->prefix('https://')->required(),
                    TextInput::make('youtube')
                    ->prefix('https://')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('instagram'),
                TextColumn::make('facebook'),
                TextColumn::make('twitter'),
                ToggleColumn::make('visible')->onIcon('heroicon-s-lightning-bolt')
                ->offIcon('heroicon-s-user')->onColor('success')
                ->offColor('danger')
            ])->defaultSort('visible')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialTags::route('/'),
            'create' => Pages\CreateSocialTags::route('/create'),
            'edit' => Pages\EditSocialTags::route('/{record}/edit'),
        ];
    }    
}
