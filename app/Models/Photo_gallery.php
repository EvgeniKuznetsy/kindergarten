<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo_gallery extends Model
{

    protected $table = 'photo_galleries';
    protected $fillable = [
        'image','title_photo_gallery_id'
    ];

}
