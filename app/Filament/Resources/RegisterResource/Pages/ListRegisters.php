<?php

namespace App\Filament\Resources\RegisterResource\Pages;

use App\Filament\Resources\RegisterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisters extends ListRecords
{
    protected static string $resource = RegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
