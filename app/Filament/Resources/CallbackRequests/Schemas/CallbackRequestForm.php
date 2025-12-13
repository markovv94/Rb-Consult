<?php

namespace App\Filament\Resources\CallbackRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CallbackRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->disabled(),
                TextInput::make('email')
                    ->label('E-Mail')
                    ->email()
                    ->required()
                    ->disabled(),
                TextInput::make('interest')
                    ->label('Interessenbereich')
                    ->disabled(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'neu' => 'Neu',
                        'kontaktiert' => 'Kontaktiert',
                        'archiviert' => 'Archiviert',
                    ])
                    ->default('neu'),
            ]);
    }
}
