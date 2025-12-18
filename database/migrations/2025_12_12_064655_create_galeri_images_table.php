<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('galeri_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('galeri_id');

            // Kolom yang benar
            $table->string('file_path'); // path gambar

            $table->timestamps();

            // Relasi
            $table->foreign('galeri_id')
                  ->references('id')
                  ->on('galeris')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeri_images');
    }
};
