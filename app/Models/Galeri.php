<?php

namespace App\Models;
use App\Models\GaleriImage;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris'; // nama tabel

    protected $fillable = [
        'judul',
        'gambar',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

   public function images()
{
    return $this->hasMany(GaleriImage::class, 'galeri_id');
}


}
