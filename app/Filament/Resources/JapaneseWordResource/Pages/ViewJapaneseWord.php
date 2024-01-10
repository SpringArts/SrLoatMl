<?php

namespace App\Filament\Resources\JapaneseWordResource\Pages;

use App\Filament\Resources\JapaneseWordResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJapaneseWord extends ViewRecord
{
    protected static string $resource = JapaneseWordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
