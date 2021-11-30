<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'main_image',
        'pop_image'
    ];
    
}
