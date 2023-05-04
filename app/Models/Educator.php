<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    protected $table='educators';
    protected $fillable = [
        'name','full_name', 'image',  'educator',
    ];

}
