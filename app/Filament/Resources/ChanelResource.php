<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChanelResource\Pages;
use App\Filament\Resources\ChanelResource\RelationManagers;
use App\Models\Chanel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChanelResource extends Resource
{
    protected static ?string $model = Chanel::class;

    public static function getNavigationLabel(): string
    {
        return 'Каналы';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Основная информация (Русский)')
                            ->schema([
                                TextInput::make('title_ru')
                                    ->label('Название')
                                    ->required(),
                                RichEditor::make('description_ru')
                                    ->label('Описание')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Основная информация (Английский)')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Название')
                                    ->required(),
                                RichEditor::make('description_en')
                                    ->label('Описание')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Основная информация (Татарский)')
                            ->schema([
                                TextInput::make('title_tt')
                                    ->label('Название')
                                    ->required(),
                                RichEditor::make('description_tt')
                                    ->label('Описание')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Основная информация (Узбекский)')
                            ->schema([
                                TextInput::make('title_uz')
                                    ->label('Название')
                                    ->required(),
                                RichEditor::make('description_uz')
                                    ->label('Описание')
                                    ->required(),
                            ]),
                    ])->columnSpanFull(),
                Section::make('Общая информация')
                    ->schema([
                        TextInput::make('link')
                            ->label('URL - ссылка на канал')
                            ->required(),
                        Select::make('category_id')
                            ->relationship('category', 'title_ru')
                            ->label('Категория')
                            ->required(),
                        Select::make('type')
                            ->label('Тип канала')
                            ->options([
                                'public' => 'Публичный канал',
                                'private' => 'Приватный канал',
                            ])
                            ->default('public')  // Установить значение по умолчанию, если необходимо
                            ->required(),
                        TextInput::make('age_channel')
                            ->label('Возраст канала')
                            ->numeric(),
                        TextInput::make('publications')
                            ->label('Всего публикаций')
                            ->numeric(),
                            TextInput::make('language')
                            ->label('Гео и язык канала'),
                        FileUpload::make('img')
                            ->image()
                            ->directory('chanels')
                            ->label('Изображение'),
                        Toggle::make('is_active')
                            ->label('Активен')
                            ->default(false),
                    ]),
                Section::make('Сводка канала')
                    ->schema([
                        Tabs::make('Общая информация - табы')
                            ->tabs([
                                Tabs\Tab::make('Подписчики')
                                    ->schema([
                                        TextInput::make('subscribers')
                                            ->label('Общее кол-во')
                                            ->required(),
                                        TextInput::make('subscribers_day')
                                            ->label('Кол-во за день')
                                            ->required(),
                                        TextInput::make('subscribers_week')
                                            ->label('Кол-во за неделю')
                                            ->required(),
                                        TextInput::make('subscribers_month')
                                            ->label('Кол-во за месяц')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Индекс цитирования')
                                    ->schema([
                                        TextInput::make('citation_index')
                                            ->label('Общее кол-во')
                                            ->required(),
                                        TextInput::make('citation_index_day')
                                            ->label('Кол-во за день')
                                            ->required(),
                                        TextInput::make('citation_index_week')
                                            ->label('Кол-во за неделю')
                                            ->required(),
                                        TextInput::make('citation_index_month')
                                            ->label('Кол-во за месяц')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Средний охват')
                                    ->schema([
                                        TextInput::make('average_reach')
                                            ->label('Общее кол-во')
                                            ->required(),
                                        TextInput::make('average_reach_day')
                                            ->label('Кол-во за день')
                                            ->required(),
                                        TextInput::make('average_reach_week')
                                            ->label('Кол-во за неделю')
                                            ->required(),
                                        TextInput::make('average_reach_month')
                                            ->label('Кол-во за месяц')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Средний рекламный охват')
                                    ->schema([
                                        TextInput::make('average_advertising_reach')
                                            ->label('Общее кол-во')
                                            ->required(),
                                        TextInput::make('average_advertising_reach_day')
                                            ->label('Кол-во за день')
                                            ->required(),
                                        TextInput::make('average_advertising_reach_week')
                                            ->label('Кол-во за неделю')
                                            ->required(),
                                        TextInput::make('average_advertising_reach_month')
                                            ->label('Кол-во за месяц')
                                            ->required(),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ru')
                    ->label('Название канала'),
                ImageColumn::make('img')
                    ->label('Изображение')
                    ->circular()
                    ->size(50),
                BooleanColumn::make('is_active')
                    ->label('Активный'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListChanels::route('/'),
            'create' => Pages\CreateChanel::route('/create'),
            'view' => Pages\ViewChanel::route('/{record}'),
            'edit' => Pages\EditChanel::route('/{record}/edit'),
        ];
    }
}
