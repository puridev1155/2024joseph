<?php

namespace App\Filament\Resources\AskResource\Pages;

use App\Filament\Resources\AskResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsks extends ListRecords
{
    protected static string $resource = AskResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
