<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TeaResource\Pages;
use App\Filament\Admin\Resources\TeaResource\RelationManagers;
use App\Models\Tea;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeaResource extends Resource
{
    protected static ?string $model = Tea::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Слайдеры';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                FileUpload::make('image_path')
                    ->directory('teas')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Toggle::make('is_active')->label('Активно'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название')->sortable()->searchable(),
                ImageColumn::make('image_path')->label('Изображение'),
                IconColumn::make('is_active')->boolean()->label('Активно'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTeas::route('/'),
            'create' => Pages\CreateTea::route('/create'),
            'edit' => Pages\EditTea::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Наш чай';
    }

    public static function getModelLabel(): string
    {
        return 'Чай';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Чаи';
    }
}
