<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'image',
    ];

    // ✅ TAMBAHKAN RELASI INI
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
