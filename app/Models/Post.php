<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
