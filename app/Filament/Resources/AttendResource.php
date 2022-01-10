<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendResource\Pages;
use App\Filament\Resources\AttendResource\RelationManagers;
use App\Models\Attend;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AttendResource extends Resource
{
    protected static ?string $model = Attend::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('emplyoee_id'),
                Forms\Components\TimePicker::make('attend_at')
                    ->required(),
                Forms\Components\TimePicker::make('out_at'),
                Forms\Components\TimePicker::make('delay'),
                Forms\Components\TimePicker::make('extra_time'),
                Forms\Components\TimePicker::make('total_time'),
                Forms\Components\TextInput::make('department'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('emplyoee_id'),
            Tables\Columns\TextColumn::make('attend_at'),
            Tables\Columns\TextColumn::make('out_at'),
            Tables\Columns\TextColumn::make('delay')
                ->dateTime(),
            Tables\Columns\TextColumn::make('extra_time')
                ->dateTime(),
            Tables\Columns\TextColumn::make('total_time')
                ->dateTime(),
            Tables\Columns\TextColumn::make('department'),
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
            'index' => Pages\ListAttends::route('/'),
            'create' => Pages\CreateAttend::route('/create'),
            'edit' => Pages\EditAttend::route('/{record}/edit'),
        ];
    }
}
