<?php

namespace App\Filament\Resources\ContactSubmissions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('Vorname')
                    ->required()
                    ->disabled(),
                TextInput::make('last_name')
                    ->label('Nachname')
                    ->required()
                    ->disabled(),
                TextInput::make('email')
                    ->label('Email-Adresse')
                    ->email()
                    ->required()
                    ->disabled(),
                TextInput::make('subject')
                    ->label('Betreff')
                    ->required()
                    ->disabled(),
                Textarea::make('message')
                    ->label('Nachricht')
                    ->required()
                    ->disabled()
                    ->rows(10),
                TextInput::make('created_at')
                    ->label('Eingegangen am')
                    ->disabled(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'new' => 'Neu',
                        'read' => 'Gelesen',
                        'archived' => 'Archiviert',
                    ])
                    ->required(),
            ]);
    }
}
