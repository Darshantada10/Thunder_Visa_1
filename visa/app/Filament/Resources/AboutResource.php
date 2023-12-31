<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\About;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutResource\RelationManagers;
use Filament\Forms\Components\RichEditor;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Design';
    protected static ?int $navigationSort = 7;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('heading')->label('Heading')->required(),
                    // RichEditor::make('description')->label('Description')->required(),
                    TinyEditor::make('description')->label('Description')->required(),
                    TextInput::make('point_1')->label('Point 1')->required(),
                    TextInput::make('description_1')->label('Description 1')->required(),
                    TextInput::make('point_2')->label('Point 1')->required(),
                    TextInput::make('description_2')->label('Description 2')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading'),
                ToggleColumn::make('visible')->onIcon('heroicon-s-lightning-bolt')
                ->offIcon('heroicon-s-user') ->onColor('success')
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }    
}
