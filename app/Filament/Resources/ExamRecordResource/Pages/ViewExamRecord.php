<?php

namespace App\Filament\Resources\ExamRecordResource\Pages;

use App\Filament\Resources\ExamRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamRecord extends ViewRecord
{
    protected static string $resource = ExamRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
