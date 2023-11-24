<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationsResource\Pages;
use App\Filament\Resources\ReservationsResource\RelationManagers;
use App\Models\Reservations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationsResource extends Resource
{
    protected static ?string $model = Reservations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reservationNo')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('roomName')->required(),
                Forms\Components\TextInput::make('checkIn')->required(),
                Forms\Components\TextInput::make('checkOut')->required(),
                Forms\Components\TextInput::make('adult')->required(),
                Forms\Components\TextInput::make('children')->required(),
                Forms\Components\TextInput::make('total')->required(),
            ]);

        
           
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reservationNo'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('roomName'),
                Tables\Columns\TextColumn::make('checkIn'),
                Tables\Columns\TextColumn::make('checkOut'),
                Tables\Columns\TextColumn::make('adult'),
                Tables\Columns\TextColumn::make('children'),
                Tables\Columns\TextColumn::make('total'),
                // Tables\Columns\IconColumn::make('approval')
                //     ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservations::route('/create'),
            'edit' => Pages\EditReservations::route('/{record}/edit'),
        ];
    }    
}
