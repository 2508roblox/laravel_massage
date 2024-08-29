<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CtaLinkResource\Pages;
use App\Filament\Resources\CtaLinkResource\RelationManagers;
use App\Models\CtaLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CtaLinkResource extends Resource
{
    protected static ?string $model = CtaLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralModelLabel(): string
    {
        return 'Liên kết';
    }
    public static function getNavigationSort(): ?int
{
    return 15; // Sắp xếp ở vị trí đầu tiên
}
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->label('Tiêu đề')
                ->required(),
                Forms\Components\TextInput::make('bold_text')
    ->label('Nền tảng')
    ->nullable(),  // Cho phép không có
            Forms\Components\TextInput::make('link')
                ->label('Liên kết')
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->label('Hình ảnh')
                ->directory('cta_links')
                ->required(),
            Forms\Components\Toggle::make('is_active')
                ->label('Kích hoạt')
                ->default(true),
            Forms\Components\TextInput::make('sort_order')
                ->label('Thứ tự sắp xếp')
                ->numeric()
                ->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')
                ->label('Tiêu đề')
                ->sortable(),
            Tables\Columns\TextColumn::make('bold_text')
                ->label('Nền tảng')
                ->sortable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Hình ảnh'),
            Tables\Columns\TextColumn::make('link')
                ->label('Liên kết')
                ->sortable(),
            Tables\Columns\BooleanColumn::make('is_active')
                ->label('Kích hoạt')
                ->sortable(),
            Tables\Columns\TextColumn::make('sort_order')
                ->label('Thứ tự sắp xếp')
                ->sortable(),
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
            'index' => Pages\ListCtaLinks::route('/'),
            'create' => Pages\CreateCtaLink::route('/create'),
            'edit' => Pages\EditCtaLink::route('/{record}/edit'),
        ];
    }
}
