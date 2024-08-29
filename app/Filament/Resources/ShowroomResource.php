<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowroomResource\Pages;
use App\Filament\Resources\ShowroomResource\RelationManagers;
use App\Models\Showroom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowroomResource extends Resource
{
    protected static ?string $model = Showroom::class;

    // Thay đổi biểu tượng điều hướng thành biểu tượng phù hợp hơn
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    // Đặt thứ tự điều hướng ở cuối cùng
    protected static ?int $navigationSort = 10;
    public static function getPluralModelLabel(): string
    {
        return 'Vị trí cửa hàng';
    }
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('region')
                ->label('Khu vực')
                ->required()
                ->options([
                    'Miền Bắc' => 'Miền Bắc',
                    'Miền Trung' => 'Miền Trung',
                    'Miền Nam' => 'Miền Nam',
                ]),
            Forms\Components\Textarea::make('address')
                ->label('Địa chỉ')
                ->required()
                ->maxLength(500),
            Forms\Components\FileUpload::make('image')
                ->label('Hình ảnh')
                ->image(),
            Forms\Components\TextInput::make('phone')
                ->label('Số điện thoại')
                ->tel()
                ->maxLength(50)
                ->default(null),
            Forms\Components\TextInput::make('opening_hours')
                ->label('Thời gian mở cửa')
                ->maxLength(255)
                ->default(null),
            Forms\Components\Textarea::make('notes')
                ->label('Ghi chú')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('region')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('opening_hours')
                    ->searchable(),
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
            'index' => Pages\ListShowrooms::route('/'),
            'create' => Pages\CreateShowroom::route('/create'),
            'edit' => Pages\EditShowroom::route('/{record}/edit'),
        ];
    }
}
