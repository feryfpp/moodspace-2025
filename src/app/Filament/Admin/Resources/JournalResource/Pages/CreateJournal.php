<?php

namespace App\Filament\Admin\Resources\JournalResource\Pages;

use App\Filament\Admin\Resources\JournalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJournal extends CreateRecord
{
    protected static string $resource = JournalResource::class;
}
