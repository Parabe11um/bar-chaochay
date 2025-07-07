<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSlider extends Model
{
    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = ['name', 'images'];
}
