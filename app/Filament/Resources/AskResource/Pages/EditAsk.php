<?php

namespace App\Filament\Resources\AskResource\Pages;

use App\Filament\Resources\AskResource;
use Filament\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditAsk extends EditRecord
{
    protected static string $resource = AskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

        protected function getFormActions(): array
    {
        return [
            $this->getCancelFormAction(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->maxLength(255),
            Forms\Components\Textarea::make('content')
                ->label('Content')
                ->columnSpanFull(),
            Forms\Components\Repeater::make('comments')
                ->relationship('comments')
                ->schema([
                    Forms\Components\TextInput::make('user_id')
                        ->label('User ID')
                        ->disabled(),
                    Forms\Components\Textarea::make('content')
                        ->label('Comment')
                        ->disabled(),
                ])
                ->columns(1)
                ->disabled(), // Disable editing existing comments in this context
            Forms\Components\Textarea::make('new_comment')
                ->label('Add a new comment')
                ->columnSpanFull(),
        ];
    }

    protected function beforeSave(): void
    {
        parent::beforeSave();

        if ($newCommentContent = $this->data['new_comment'] ?? null) {
            $this->record->comments()->create([
                'content' => $newCommentContent,
                'user_id' => auth()->id(), // Assuming the authenticated user is adding the comment
            ]);
        }
    }
}
