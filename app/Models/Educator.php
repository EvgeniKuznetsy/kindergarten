<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    protected $table = 'educators';
    protected $fillable=['full_name','image','educator', 'educator_group_id',
    ];

}
