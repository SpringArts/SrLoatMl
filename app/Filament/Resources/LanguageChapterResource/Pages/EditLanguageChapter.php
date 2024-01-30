<?php

namespace App\Filament\Resources\LanguageChapterResource\Pages;

use App\Filament\Resources\LanguageChapterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLanguageChapter extends EditRecord
{
    protected static string $resource = LanguageChapterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
