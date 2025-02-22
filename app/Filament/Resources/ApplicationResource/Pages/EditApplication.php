<?php

namespace App\Filament\Resources\ApplicationResource\Pages;

use App\Filament\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApplication extends EditRecord
{
    protected static string $resource = ApplicationResource::class;


    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getFormSchema(): array
    {
        return [

            \Filament\Forms\Components\TextInput::make('korean_name')
                ->label('성명(한글)')
                ->disabled(),
            \Filament\Forms\Components\TextInput::make('english_name')
                ->label('성명(영문)')
                ->disabled(),
            
        ];
    }
}
