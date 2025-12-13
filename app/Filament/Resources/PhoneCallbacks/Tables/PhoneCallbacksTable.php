<?php

namespace App\Filament\Resources\PhoneCallbacks\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;

class PhoneCallbacksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Telefon')
                    ->searchable(),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'primary' => 'neu',
                        'warning' => 'kontaktiert',
                        'secondary' => 'archiviert',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'neu' => 'Neu',
                        'kontaktiert' => 'Kontaktiert',
                        'archiviert' => 'Archiviert',
                        default => $state,
                    }),
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'neu' => 'Neu',
                        'kontaktiert' => 'Kontaktiert',
                        'archiviert' => 'Archiviert',
                    ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
