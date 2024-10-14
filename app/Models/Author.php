<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'front_id_image',
        'back_id_image',
        'portrait_image',
        'reason',
        'is_approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
