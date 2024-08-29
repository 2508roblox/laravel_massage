<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'showrooms';

    // Các trường có thể được gán bằng cách sử dụng Mass Assignment
    protected $fillable = [
        'region',
        'address',
        'image',
        'phone',
        'opening_hours',
        'notes',
    ];

    // Tùy chọn nếu không muốn dùng timestamps
    public $timestamps = true;

    // Nếu bạn cần format lại timestamps
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
