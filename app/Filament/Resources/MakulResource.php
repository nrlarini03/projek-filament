<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakulResource\Pages;
use App\Filament\Resources\MakulResource\RelationManagers;
use App\Models\Makul;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MakulResource extends Resource
{
    protected static ?string $model = Makul::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_makul')
                    ->label('Nama Mata Kuliah')
                    ->required(), // Menambahkan validasi agar field 'nama_makul' tidak kosong
                Forms\Components\TextInput::make('kode')
                    ->label('Kode Mata Kuliah')
                    ->required(),
                Forms\Components\TextInput::make('sks')
                    ->label('SKS')
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_makul')->sortable()->searchable(),
                TextColumn::make('sks')->sortable(),
                TextColumn::make('kode')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMakuls::route('/'),
            'create' => Pages\CreateMakul::route('/create'),
            'edit' => Pages\EditMakul::route('/{record}/edit'),
            'laporan' => Pages\LaporanMakul::route('/laporan'),
        ];
    }    
}
