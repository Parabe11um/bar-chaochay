<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AboutSliderResource\Pages;
use App\Filament\Admin\Resources\AboutSliderResource\RelationManagers;
use App\Models\AboutSlider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutSliderResource extends Resource
{
    protected static ?string $model = AboutSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Слайдеры';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Название')
                ->required()
                ->maxLength(255),
            FileUpload::make('images')
                ->label('Изображения')
                ->multiple()
                ->image()
                ->reorderable()
                ->preserveFilenames()
                ->directory('about-sliders')
                ->enableDownload()
                ->enableOpen()
                ->enableReordering()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Название')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListAboutSliders::route('/'),
            'create' => Pages\CreateAboutSlider::route('/create'),
            'edit' => Pages\EditAboutSlider::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'О нас';
    }

    public static function getModelLabel(): string
    {
        return 'Фото';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Фото';
    }
}
