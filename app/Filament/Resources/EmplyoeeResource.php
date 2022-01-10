<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmplyoeeResource\Pages;
use App\Filament\Resources\EmplyoeeResource\RelationManagers;
use App\Models\Emplyoee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Hash;


class EmplyoeeResource extends Resource
{
    protected static ?string $model = Emplyoee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstName')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('secondName')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('familyName')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('salary')
                    ->required(),
                Forms\Components\TimePicker::make('attend_at')
                    ->required(),
                Forms\Components\TimePicker::make('out_at')
                    ->required(),
                Forms\Components\Toggle::make('logIn')
                    ->required(),
                Forms\Components\Toggle::make('medicalInsuranse')
                    ->required(),
                Forms\Components\TextInput::make('NumberInsurance')
                    ->required()
                    ->maxLength(255),
                                                        //forigne key           //method in model            //name of colu
                Forms\Components\BelongsToSelect::make('department_id')->relationship('departmentId', 'name_department'),
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('card')
                    ->options([
                        'passport' => 'PassPort',
                        'nationalId' => 'National ID',
                    ]),
                Forms\Components\TextInput::make('ID_card')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\DatePicker::make('start_contarct_from')
                //     ->required(),
                // Forms\Components\DatePicker::make('end_contarct_to'),
                Forms\Components\TextInput::make('password')
                 ->password()
                 ->required()
                 ->maxLength(255)
                 ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
                Forms\Components\TextInput::make('vacations_balance')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('firstName'),
                Tables\Columns\TextColumn::make('secondName'),
                Tables\Columns\TextColumn::make('familyName'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('salary'),
                Tables\Columns\BooleanColumn::make('logIn'),
                Tables\Columns\BooleanColumn::make('medicalInsuranse'),
                Tables\Columns\TextColumn::make('NumberInsurance'),
                Tables\Columns\TextColumn::make('department_id'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('card'),
                Tables\Columns\TextColumn::make('ID_card'),
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('attend_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('out_at')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('start_contract_from'),
                // Tables\Columns\TextColumn::make('end_contract_to'),
                Tables\Columns\TextColumn::make('vacations_balance'),
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
            'index' => Pages\ListEmplyoees::route('/'),
            'create' => Pages\CreateEmplyoee::route('/create'),
            'edit' => Pages\EditEmplyoee::route('/{record}/edit'),
        ];
    }
}
