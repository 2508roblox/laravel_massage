<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsItem  extends Model
{
    use HasFactory;
    // Tên bảng
    protected $table = 'news';

    // Khóa chính
    protected $primaryKey = 'id';

    // Các trường có thể điền vào
    protected $fillable = [
        'title',
        'slug',
        'cover_img',
        'content'
    ];

    // Tự động thêm timestamp
    public $timestamps = true;

    // Định dạng cho các cột timestamp
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
