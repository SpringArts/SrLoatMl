<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageChapterResource\Pages;
use App\Filament\Resources\LanguageChapterResource\RelationManagers;
use App\Models\LanguageChapter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LanguageChapterResource extends Resource
{
    protected static ?string $model = LanguageChapter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Language";

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('language_level_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('chapter')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('languageLevel.level')
                    ->sortable(),
                Tables\Columns\TextColumn::make('chapter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            RelationManagers\JapaneseLanguageWordsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLanguageChapters::route('/'),
            'create' => Pages\CreateLanguageChapter::route('/create'),
            'view' => Pages\ViewLanguageChapter::route('/{record}'),
            'edit' => Pages\EditLanguageChapter::route('/{record}/edit'),
        ];
    }
}
