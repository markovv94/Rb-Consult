<?php

namespace App\Filament\Resources\PhoneCallbacks\Pages;

use App\Filament\Resources\PhoneCallbacksResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhoneCallbacks extends ListRecords
{
    protected static string $resource = PhoneCallbacksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
