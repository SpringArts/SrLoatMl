<?php

namespace App\Filament\Resources\JapaneseWordResource\Pages;

use App\Filament\Resources\JapaneseWordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJapaneseWord extends EditRecord
{
    protected static string $resource = JapaneseWordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
