<?php

namespace App\Filament\Resources\Pesantrens;

use App\Filament\Resources\Pesantrens\Pages\CreatePesantren;
use App\Filament\Resources\Pesantrens\Pages\EditPesantren;
use App\Filament\Resources\Pesantrens\Pages\ListPesantrens;
use App\Filament\Resources\Pesantrens\Schemas\PesantrenForm;
use App\Filament\Resources\Pesantrens\Tables\PesantrensTable;
use App\Models\Pesantren;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PesantrenResource extends Resource
{
    protected static ?string $model = Pesantren::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PesantrenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PesantrensTable::configure($table);
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
            'index' => ListPesantrens::route('/'),
            'create' => CreatePesantren::route('/create'),
            'edit' => EditPesantren::route('/{record}/edit'),
        ];
    }
}
