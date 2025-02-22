<?php

namespace App\Filament\Resources\ApplicationResource\Pages;


use App\Filament\Resources\ApplicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\ImageColumn;

class ViewApplication extends ViewRecord
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
