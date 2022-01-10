<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HolidayResource\Pages;
use App\Filament\Resources\HolidayResource\RelationManagers;
use App\Models\Holiday;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class HolidayResource extends Resource
{
    protected static ?string $model = Holiday::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('emplyoee_id'),
                Forms\Components\DatePicker::make('from')
                    ->required(),
                Forms\Components\DatePicker::make('to')
                    ->required(),
                Forms\Components\TextInput::make('total_holiday')
                    ->required(),
                Forms\Components\TextInput::make('reason')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reject' => 'Rejected',
                        'accept' => 'Accepted'
                    ]),
                Forms\Components\TextInput::make('total_days')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('emplyoee_id'),
                Tables\Columns\TextColumn::make('from')
                    ->date(),
                Tables\Columns\TextColumn::make('to')
                    ->date(),
                Tables\Columns\TextColumn::make('total_holiday'),
                Tables\Columns\TextColumn::make('reason'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('total_days'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListHolidays::route('/'),
            'create' => Pages\CreateHoliday::route('/create'),
            'edit' => Pages\EditHoliday::route('/{record}/edit'),
        ];
    }
}
