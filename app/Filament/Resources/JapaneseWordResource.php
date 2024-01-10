<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JapaneseWordResource\Pages;
use App\Filament\Resources\JapaneseWordResource\RelationManagers;
use App\Models\JapaneseWord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JapaneseWordResource extends Resource
{
    protected static ?string $model = JapaneseWord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Words";

    protected static ?string $navigationLabel = "Words";

    public static function form(Form $form): Form
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

    public static function table(Table $table): Table
    {
        return $table
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
            'index' => Pages\ListJapaneseWords::route('/'),
            'create' => Pages\CreateJapaneseWord::route('/create'),
            'view' => Pages\ViewJapaneseWord::route('/{record}'),
            'edit' => Pages\EditJapaneseWord::route('/{record}/edit'),
        ];
    }
}
