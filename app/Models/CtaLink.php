<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtaLink extends Model
{
    use HasFactory;
    protected $table = 'cta_links';

    protected $fillable = [
        'title',
        'link',
        'image',
        'bold_text',
        'is_active',
        'sort_order',
    ];
}
