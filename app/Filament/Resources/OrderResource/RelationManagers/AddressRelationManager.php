<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('Họ Tên') // First Name
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->label('Email') // Email
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Điện thoại') // Phone
                    ->required()
                    ->tel()
                    ->maxLength(20),
                Forms\Components\TextInput::make('street_address')
                    ->label('Địa chỉ') // Street Address
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->label('Ghi chú') // Notes
                    ->maxLength(255),
            ]);
    }


    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('street_address')
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->label('Họ Tên'), // First Name
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Email'), // Last Name
                Tables\Columns\TextColumn::make('phone')
                    ->label('Điện thoại'), // Phone
                Tables\Columns\TextColumn::make('street_address')
                    ->label('Địa chỉ'), // Street Address
                Tables\Columns\TextColumn::make('city')
                    ->label('Ghi chú'), // City
            ])
            ->filters([
                // Add filters if needed
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tạo'), // Create
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Chỉnh sửa'), // Edit
                Tables\Actions\DeleteAction::make()
                    ->label('Xóa'), // Delete
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa'), // Delete
                ]),
            ]);
    }
}
