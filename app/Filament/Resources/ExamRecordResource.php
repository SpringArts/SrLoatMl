<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ExamRecord;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExamRecordResource\Pages;
use App\Filament\Resources\ExamRecordResource\RelationManagers;

class ExamRecordResource extends Resource
{
    protected static ?string $model = ExamRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextColumn::make('name'),
                TextColumn::make('language'),
                TextColumn::make('mark'),
                TextColumn::make('time'),
                TextColumn::make('provider_name')->label('Provider'),
                BooleanColumn::make('is_active')
                    ->label('Active', 'Inactive'),
                TextColumn::make('created_at'),
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
            'index' => Pages\ListExamRecords::route('/'),
            'create' => Pages\CreateExamRecord::route('/create'),
            'view' => Pages\ViewExamRecord::route('/{record}'),
            'edit' => Pages\EditExamRecord::route('/{record}/edit'),
        ];
    }
}
