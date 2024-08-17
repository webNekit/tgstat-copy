<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChanelResource\Pages;
use App\Filament\Resources\ChanelResource\RelationManagers;
use App\Models\Chanel;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
