<?php

namespace App\Filament\Resources\LanguageChapterResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JapaneseLanguageWordsRelationManager extends RelationManager
{
    protected static string $relationship = 'japaneseLanguageWords';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('language_chapter_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('hiragana')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('kanji')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('romaji')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('english')
                    ->required()
                    ->maxLength(50),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('kanji')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('languageChapter.chapter')
                    ->sortable(),
                Tables\Columns\TextColumn::make('hiragana')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kanji')
                    ->searchable(),
                Tables\Columns\TextColumn::make('romaji')
                    ->searchable(),
                Tables\Columns\TextColumn::make('english')
                    ->searchable(),
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
