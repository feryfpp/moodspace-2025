<?php

namespace App\Filament\Admin\Resources\MoodLogResource\Pages;

use App\Filament\Admin\Resources\MoodLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMoodLogs extends ListRecords
{
    protected static string $resource = MoodLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
