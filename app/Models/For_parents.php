<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class For_parents extends Model
{
    protected $table='for_parents';
    protected $fillable = [
        'title', 'image',  'text','document' ,'created_at'
    ];
}
