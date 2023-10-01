<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\BusinessVisa;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BusinessVisaResource\Pages;
use App\Filament\Resources\BusinessVisaResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class BusinessVisaResource extends Resource
{
    protected static ?string $model = BusinessVisa::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Business Visa';
    protected static ?int $navigationSort = 14;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')->required(),
                    FileUpload::make('image')->required(),
                    Repeater::make('content')->schema([
                        TinyEditor::make('content'),
                        // RichEditor::make('content')
                    ])->required(),
                    Repeater::make('points')->schema([
                        TinyEditor::make('points'),
                        // RichEditor::make('points')
                    ])->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('image'),
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
            'index' => Pages\ListBusinessVisas::route('/'),
            'create' => Pages\CreateBusinessVisa::route('/create'),
            'edit' => Pages\EditBusinessVisa::route('/{record}/edit'),
        ];
    }    
}
