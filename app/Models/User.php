<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

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
