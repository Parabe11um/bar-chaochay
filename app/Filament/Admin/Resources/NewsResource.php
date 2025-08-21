<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Новости';
    // (опц.) сгруппируй в меню
    protected static ?string $navigationGroup = 'Контент';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')->label('Заголовок')->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($set, $state) => $set('slug', \Str::slug($state))),
            TextInput::make('slug')->required()->unique(ignoreRecord: true),
            TextInput::make('teaser')->label('Анонс')->maxLength(255),
            FileUpload::make('image')->label('Изображение')->directory('news')->image()->imageEditor(),
            RichEditor::make('body')->label('Текст')->columnSpanFull()->toolbarButtons([
                'bold','italic','h2','h3','bulletList','orderedList','blockquote','link','undo','redo'
            ]),
            Toggle::make('is_active')->label('Активна')->default(true),
            DateTimePicker::make('published_at')->label('Дата публикации')->default(now()),
        ])->columns(2);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('title')->label('Заголовок')->searchable()->limit(50),
            TextColumn::make('published_at')->label('Публикована')->dateTime()->sortable(),
            IconColumn::make('is_active')->boolean()->label('Активна'),
        ])
        ->defaultSort('published_at', 'desc')
        ->actions([
        Tables\Actions\EditAction::make()->label('Изменить'),
        Tables\Actions\DeleteAction::make()->label('Удалить'),
    ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make()->label('Удалить выбранные'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit'   => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
