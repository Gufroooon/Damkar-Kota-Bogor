<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriImage extends Model
{
    protected $table = 'galeri_images';

       protected $fillable = ['galeri_id', 'file_path'];

    public function galeri()
    {
        return $this->belongsTo(Galeri::class);
    }
}
