<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slides';

    // Các thuộc tính có thể gán
    protected $fillable = [
        'image',
        'is_active',
        'sort_order',
    ];
}
