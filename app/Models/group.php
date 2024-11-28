<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'user_id', // Thêm trường user_id
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id'); // Chủ nhóm
    }
    
    public function members()
    {
        return $this->hasMany(User::class, 'group', 'id'); // Các thành viên
    }
    
}
