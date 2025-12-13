<?php

namespace App\Filament\Resources\CallbackRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class CallbackRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('E-Mail')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('interest')
                    ->label('Interessenbereich')
                    ->limit(30)
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'neu' => 'blue',
                        'kontaktiert' => 'orange',
                        'archiviert' => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->dateTime('d.m.Y H:i')
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
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
