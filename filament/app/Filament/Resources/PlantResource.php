<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlantResource\Pages;
use App\Filament\Resources\PlantResource\RelationManagers;
use App\Models\Plant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlantResource extends Resource
{
    protected static ?string $model = Plant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('species')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('family')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('origin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rusticity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('soil')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('height')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('width')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('foliage')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('foliage_color')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('flower_color')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bloom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('melliferous')
                    ->required(),
                Forms\Components\TextInput::make('part_used')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harvest')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('use')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('internal_use')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('external_use')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('contraindication')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('culinary')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('bibliography')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('availability')
                    ->required(),
                Forms\Components\TextInput::make('litrage')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('species')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rusticity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('soil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('height')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('width')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('foliage')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foliage_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('flower_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bloom')
                    ->searchable(),
                Tables\Columns\IconColumn::make('melliferous')
                    ->boolean(),
                Tables\Columns\TextColumn::make('part_used')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harvest')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bibliography')
                    ->searchable(),
                Tables\Columns\IconColumn::make('availability')
                    ->boolean(),
                Tables\Columns\TextColumn::make('litrage')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPlants::route('/'),
            'create' => Pages\CreatePlant::route('/create'),
            'edit' => Pages\EditPlant::route('/{record}/edit'),
        ];
    }
}
