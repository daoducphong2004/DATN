<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'episode_path',
        'boook_id',
    ];
    public function chapters(){
        return $this->hasMany(chapter::class,'episode_id');
    }
}
