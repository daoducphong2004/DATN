<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'username',
        'email',
        'password',
        'full_name',
        'gender',
        'date_of_birth',
        'avatar_url',
        'status',
        'coin_earned',
        'created_at',
        'updated_at',
        'last_login',
        'status',
        'coin_earned',
        'full_name',
        'remember_token',
        'group',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }
}
