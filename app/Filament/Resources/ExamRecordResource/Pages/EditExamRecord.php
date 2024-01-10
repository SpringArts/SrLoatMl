<?php

namespace App\Filament\Resources\ExamRecordResource\Pages;

use App\Filament\Resources\ExamRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamRecord extends EditRecord
{
    protected static string $resource = ExamRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
