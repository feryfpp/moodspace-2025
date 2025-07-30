<?php

namespace App\Filament\Admin\Resources\MoodLogResource\Pages;

use App\Filament\Admin\Resources\MoodLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMoodLog extends EditRecord
{
    protected static string $resource = MoodLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
