<?php

namespace App\Filament\Resources\GraduateResource\Pages;

use App\Filament\Resources\GraduateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListGraduates extends ListRecords
{
    protected static string $resource = GraduateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

   /* public function getTabs(): array
{
    return [
        'all' => Tab::make(),
        'active' => Tab::make(),
        'inactive' => Tab::make(),
    ];
}
 */
public function getDefaultActiveTab(): string | int | null
{
    return 'active';
}
}
