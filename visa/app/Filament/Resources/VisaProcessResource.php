<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\VisaProcess;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VisaProcessResource\Pages;
use App\Filament\Resources\VisaProcessResource\RelationManagers;

class VisaProcessResource extends Resource
{
    protected static ?string $model = VisaProcess::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Design';
    protected static ?int $navigationSort = 10;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('heading1')->rules(['required'])->required(),
                    TextInput::make('point1')->rules(['required'])->required(),
                    TextInput::make('heading2')->rules(['required'])->required(),
                    TextInput::make('point2')->rules(['required'])->required(),
                    TextInput::make('heading3')->rules(['required'])->required(),
                    TextInput::make('point3')->rules(['required'])->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading1'),
                TextColumn::make('heading2'),
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
            'index' => Pages\ListVisaProcesses::route('/'),
            'create' => Pages\CreateVisaProcess::route('/create'),
            'edit' => Pages\EditVisaProcess::route('/{record}/edit'),
        ];
    }    
}
