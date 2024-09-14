<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
    ];
    public function books(){
        return $this->hasMany(Book::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
