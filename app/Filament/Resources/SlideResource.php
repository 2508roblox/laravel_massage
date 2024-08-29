<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Filament\Resources\SlideResource\RelationManagers;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 14;
    public static function getPluralModelLabel(): string
    {
        return 'Banner quảng cáo';
    }
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\FileUpload::make('image')
                ->label('Hình ảnh') // Nhãn tiếng Việt cho trường 'image'
                ->image()
                ->directory('slides') // Đặt hình ảnh trong thư mục 'slides' trong storage
                ->required()
                ->hint('Tải lên hình ảnh cho slide'), // Gợi ý cho người dùng

            Forms\Components\TextInput::make('sort_order')
                ->label('Thứ tự sắp xếp') // Nhãn tiếng Việt cho trường 'sort_order'
                ->numeric()
                ->default(0)
                ->hint('Chọn thứ tự sắp xếp cho slide'),

            Forms\Components\Toggle::make('is_active')
                ->label('Kích hoạt') // Nhãn tiếng Việt cho trường 'is_active'
                ->default(true)
                ->hint('Chọn để kích hoạt hoặc hủy kích hoạt slide này'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Hình ảnh'), // Nhãn tiếng Việt cho cột 'image'
                Tables\Columns\BooleanColumn::make('is_active')
                    ->label('Kích hoạt'), // Nhãn tiếng Việt cho cột 'is_active'
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Thứ tự sắp xếp'), // Nhãn tiếng Việt cho cột 'sort_order'
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo') // Nhãn tiếng Việt cho cột 'created_at'
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ngày cập nhật') // Nhãn tiếng Việt cho cột 'updated_at'
                    ->sortable(),
            ])
            ->filters([
                // Có thể thêm các bộ lọc tại đây
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Chỉnh sửa'), // Nhãn tiếng Việt cho hành động chỉnh sửa
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->label('Xóa đã chọn'), // Nhãn tiếng Việt cho hành động xóa hàng loạt
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
