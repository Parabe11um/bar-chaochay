<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','teaser','image','body','is_active','published_at'];
    protected $casts = ['is_active'=>'boolean','published_at'=>'datetime'];

    public function scopeActive(Builder $q): Builder {
        return $q->where('is_active', true)->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }
}
