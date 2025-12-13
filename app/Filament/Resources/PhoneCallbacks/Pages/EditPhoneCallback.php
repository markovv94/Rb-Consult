<?php

namespace App\Filament\Resources\PhoneCallbacks\Pages;

use App\Filament\Resources\PhoneCallbacksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhoneCallback extends EditRecord
{
    protected static string $resource = PhoneCallbacksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
