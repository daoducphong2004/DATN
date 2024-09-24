<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'gender',
        'date_of_birth',
        'avatar_url',
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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
