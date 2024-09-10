<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'status',
        'like',
        'view',
        'slug',
        'title',
        'author',
        'painter',
        'book_path',
        'description',
        'note',
        'is_VIP',
        'is_delete',
        'adult',
        'group_id'
    ];

    public function group(){
        return $this->belongsTo(group::class,'group_id');
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function episodes()
    {
        return $this->hasMany(episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(chapter::class);
    }
}
