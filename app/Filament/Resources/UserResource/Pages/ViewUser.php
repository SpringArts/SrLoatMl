<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Faker\Provider\ar_EG\Text;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\BooleanColumn;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public function layout(): array
    {
        return [
            TextInput::make('name')->disabled(),
            TextInput::make('email')->disabled(),
            TextInput::make('role')->disabled(),
            TextInput::make('provider_name')->disabled(),
            BooleanColumn::make('is_active')->disabled(),
            TextInput::make('created_at')->disabled(),
            // Add more fields here...
        ];
    }
}
