<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    public static function getNavigationLabel(): string
    {
        return 'Категории';
    }

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_ru')
                    ->label('Название (Русский)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title_en')
                    ->label('Название (Английский)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title_uz')
                    ->label('Название (Узбекский)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title_tt')
                    ->label('Название (Татарский)')
                    ->required()
                    ->maxLength(255),
                Toggle::make('is_active')
                    ->label('Активный')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ru')
                    ->label('Название (Русский)'),
                TextColumn::make('title_en')
                    ->label('Название (Английский)'),
                TextColumn::make('title_uz')
                    ->label('Название (Узбекский)'),
                TextColumn::make('title_tt')
                    ->label('Название (Татарский)'),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
