<?php

namespace App\Filament\Resources\CallbackRequests;

use App\Filament\Resources\CallbackRequests\Pages\CreateCallbackRequest;
use App\Filament\Resources\CallbackRequests\Pages\EditCallbackRequest;
use App\Filament\Resources\CallbackRequests\Pages\ListCallbackRequests;
use App\Filament\Resources\CallbackRequests\Schemas\CallbackRequestForm;
use App\Filament\Resources\CallbackRequests\Tables\CallbackRequestsTable;
use App\Models\CallbackRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CallbackRequestResource extends Resource
{
    protected static ?string $model = CallbackRequest::class;

    protected static ?string $navigationLabel = 'Emails';

    protected static ?string $modelLabel = 'Email-Anfrage';

    protected static ?string $pluralModelLabel = 'Emails';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone';

    public static function form(Schema $schema): Schema
    {
        return CallbackRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CallbackRequestsTable::configure($table);
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
            'index' => ListCallbackRequests::route('/'),
            'create' => CreateCallbackRequest::route('/create'),
            'edit' => EditCallbackRequest::route('/{record}/edit'),
        ];
    }
}
