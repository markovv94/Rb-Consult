<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhoneCallbacks\Pages\CreatePhoneCallback;
use App\Filament\Resources\PhoneCallbacks\Pages\EditPhoneCallback;
use App\Filament\Resources\PhoneCallbacks\Pages\ListPhoneCallbacks;
use App\Filament\Resources\PhoneCallbacks\Schemas\PhoneCallbackForm;
use App\Filament\Resources\PhoneCallbacks\Tables\PhoneCallbacksTable;
use App\Models\PhoneCallback;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PhoneCallbacksResource extends Resource
{
    protected static ?string $model = PhoneCallback::class;

    protected static ?string $navigationLabel = 'Rückrufe';

    protected static ?string $modelLabel = 'Rückrufanfrage';

    protected static ?string $pluralModelLabel = 'Rückrufe';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone';

    public static function form(Schema $schema): Schema
    {
        return PhoneCallbackForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PhoneCallbacksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPhoneCallbacks::route('/'),
            'create' => CreatePhoneCallback::route('/create'),
            'edit' => EditPhoneCallback::route('/{record}/edit'),
        ];
    }
}
