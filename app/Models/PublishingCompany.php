<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublishingCompany extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'publishing_companys';

    protected $fillable = [
        'id',
        'name',
    ];
}
