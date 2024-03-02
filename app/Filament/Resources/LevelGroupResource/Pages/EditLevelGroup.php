<?php

namespace App\Filament\Resources\LevelGroupResource\Pages;

use App\Filament\Resources\LevelGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLevelGroup extends EditRecord
{
    protected static string $resource = LevelGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
