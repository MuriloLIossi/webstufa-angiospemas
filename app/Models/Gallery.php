<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery1';

    protected $fillable = [
        'name',
        'scientific_name',
        'description',
        'image',
        'sprite_game',
    ];

}
