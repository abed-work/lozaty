<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $fillable = [
        'title_en',
        'title_ar',
        'featured_image',
        'link',
        'isFeatured'
    ];

    use HasFactory;
}
