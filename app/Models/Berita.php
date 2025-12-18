<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas'; // nama tabel

   protected $fillable = [
    'judul',
    'tanggal',
    'isi',
    'gambar',
];

}
