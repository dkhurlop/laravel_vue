<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_uri',
        'content_uri',
        'pdf_uri',
        'level_id'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class)->onDelete('cascade');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->onDelete('cascade');
    }
}
