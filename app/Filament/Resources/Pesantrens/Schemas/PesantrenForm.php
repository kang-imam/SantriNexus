<?php

namespace App\Filament\Resources\Pesantrens\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PesantrenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('village_id')
                    ->relationship('village', 'name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('nspp')
                    ->default(null),
                TextInput::make('npsn')
                    ->default(null),
                Select::make('type')
                    ->options([
            'Salaf' => 'Salaf',
            'Modern' => 'Modern',
            'Terpadu' => 'Terpadu',
            'Tahfidz' => 'Tahfidz',
            'Lainnya' => 'Lainnya',
        ])
                    ->required(),
                TextInput::make('leader_name')
                    ->default(null),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('postal_code')
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('whatsapp')
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('website')
                    ->url()
                    ->default(null),
                TextInput::make('latitude')
                    ->numeric()
                    ->default(null),
                TextInput::make('longitude')
                    ->numeric()
                    ->default(null),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
