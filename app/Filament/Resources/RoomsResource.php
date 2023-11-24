<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomsResource\Pages;
use App\Filament\Resources\RoomsResource\RelationManagers;
use App\Models\Rooms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class RoomsResource extends Resource
{
    protected static ?string $model = Rooms::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Name')->required(),
                Forms\Components\Hidden::make('isAvailable')->default('1'),
                Forms\Components\TextInput::make('Description')->required(),
                Forms\Components\TextInput::make('Price')->required(),
                Forms\Components\FileUpload::make('Image')->required(),
                Forms\Components\TextInput::make('min')->required(),
                Forms\Components\TextInput::make('max')->required(),
            ]);

            $data = $form->model()->toArray();

            // Check room availability
            $roomId = $data['room_id'];
            $startDate = $data['start_date'];
            $endDate = $data['end_date'];
        
            // Query the database to check if there are overlapping reservations for the same room
            $existingReservations = Reservation::where('room_id', $roomId)
                ->where(function ($query) use ($startDate, $endDate) {
                    $query->where(function ($q) use ($startDate, $endDate) {
                        $q->where('start_date', '<', $startDate)
                            ->where('end_date', '>', $startDate);
                    })->orWhere(function ($q) use ($startDate, $endDate) {
                        $q->where('start_date', '<', $endDate)
                            ->where('end_date', '>', $endDate);
                    });
                })
                ->count();
        
            if ($existingReservations > 0) {
                // The room is already occupied for the selected date range
                return back()->withErrors(['room_id' => 'This room is already occupied for the selected date range.']);
            }
        
            // If the room is available, proceed with creating the reservation
            Reservation::create($data);
        
            return Redirect::route('your.reservation.index');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Name'),
                Tables\Columns\TextColumn::make('Description'),
                Tables\Columns\TextColumn::make('Price'),
                Tables\Columns\ImageColumn::make('Image'),
                Tables\Columns\TextColumn::make('min'),
                Tables\Columns\TextColumn::make('max'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListRooms::route('/'),
            // 'create' => Pages\CreateRooms::route('/create'),
            // 'edit' => Pages\EditRooms::route('/{record}/edit'),
        ];
    }    
}