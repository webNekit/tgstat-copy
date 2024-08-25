<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessagesResource\Pages;
use App\Filament\Resources\MessagesResource\RelationManagers;
use App\Models\Message;
use App\Models\Messages;
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

class MessagesResource extends Resource
{
    protected static ?string $model = Message::class;

    public static function getNavigationLabel(): string
    {
        return 'Чаты';
    }

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')
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
                    ]),
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
                            ->default('public')
                            ->required(),
                        TextInput::make('language')
                            ->label('Гео и язык чата')
                            ->required(),
                        TextInput::make('recent_subscriptions')
                            ->label('подписчики за 24 часа')
                            ->required(),
                        TextInput::make('active_subscriptions')
                            ->label('активные подписчики')
                            ->required(),
                        TextInput::make('amount_messages')
                            ->label('кол-во сообщений')
                            ->required(),
                        FileUpload::make('img')
                            ->image()
                            ->directory('messages')
                            ->label('Изображение'),
                        Toggle::make('is_active')
                            ->label('Активен')
                            ->default(false),
                    ]),
                Section::make('Сводка чата')
                    ->schema([
                        Tabs::make('Общая информация - табы')
                            ->tabs([
                                Tabs\Tab::make('Пользователи')
                                    ->schema([
                                        TextInput::make('users')
                                            ->label('Общее кол-во')
                                            ->required(),
                                        TextInput::make('users_day')
                                            ->label('Кол-во за день')
                                            ->required(),
                                        TextInput::make('users_week')
                                            ->label('Кол-во за неделю')
                                            ->required(),
                                        TextInput::make('Кол-во за месяц')
                                            ->label('Кол-во за месяц')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('Пользователи онлайн')
                                    ->schema([
                                        TextInput::make('online_users_day')
                                            ->label('Онлайн днем')
                                            ->required(),
                                        TextInput::make('online_users_night')
                                            ->label('Онлайн ночью')
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
                    ->label('Название чата'),
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessages::route('/create'),
            'edit' => Pages\EditMessages::route('/{record}/edit'),
        ];
    }
}
