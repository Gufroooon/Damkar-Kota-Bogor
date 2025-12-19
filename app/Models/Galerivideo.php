<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galerivideo extends Model
{
    protected $table = "galeri_videos";

    protected $fillable = [
        'judul',
        'url_video',
        'tanggal', 
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}

