<?php

namespace App\Filament\Resources\PhoneCallbacks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PhoneCallbackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->disabled(),
                TextInput::make('phone')
                    ->label('Telefon')
                    ->tel()
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
