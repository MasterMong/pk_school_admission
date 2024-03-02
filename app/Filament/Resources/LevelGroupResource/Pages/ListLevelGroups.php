<?php

namespace App\Filament\Resources\LevelGroupResource\Pages;

use App\Filament\Resources\LevelGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLevelGroups extends ListRecords
{
    protected static string $resource = LevelGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
