<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsItemResource\Pages;
use App\Filament\Resources\NewsItemResource\RelationManagers;
use App\Models\NewsItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class NewsItemResource extends Resource
{
    protected static ?string $model = NewsItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getPluralModelLabel(): string
    {
        return 'Tin tức';
    }
    public static function getNavigationSort(): ?int
{
    return 7; // Sắp xếp ở vị trí đầu tiên
}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Tiêu đề')

                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255)  ->afterStateUpdated(
                        fn (string $operation, $state, Set $set) =>
                        $operation === 'create' ? $set('slug', Str::slug($state)) : null,
                    ),
                Forms\Components\TextInput::make('slug')
                ->label('Liên kết')
                ->disabled()
                ->required()
                ->dehydrated()
                ->unique(NewsItem::class, 'slug', ignoreRecord: true),
                Forms\Components\FileUpload::make('cover_img')
                ->columnSpanFull()
                ->label('Ảnh bìa')
                ->required(),

                Forms\Components\RichEditor::make('content')
                ->label('Nội dung bài viết')

                ->columnSpanFull()
                    ->required(),

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
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
            'index' => Pages\ListNewsItems::route('/'),
            'create' => Pages\CreateNewsItem::route('/create'),
            'edit' => Pages\EditNewsItem::route('/{record}/edit'),
        ];
    }
}
