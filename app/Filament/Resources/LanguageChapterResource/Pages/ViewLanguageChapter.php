<?php

namespace App\Filament\Resources\LanguageChapterResource\Pages;

use App\Filament\Resources\LanguageChapterResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLanguageChapter extends ViewRecord
{
    protected static string $resource = LanguageChapterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
