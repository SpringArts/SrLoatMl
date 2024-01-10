<?php

namespace App\Filament\Resources\ExamRecordResource\Pages;

use App\Filament\Resources\ExamRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamRecords extends ListRecords
{
    protected static string $resource = ExamRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
