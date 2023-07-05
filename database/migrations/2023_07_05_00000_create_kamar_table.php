<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id_kamar');
            $table->string('nama', 100);
            $table->integer('harga');
            $table->integer('stok_kamar');
            $table->binary('gambar_satu');
            $table->binary('gambar_dua')->nullable();
            $table->binary('gambar_tiga')->nullable();
            $table->binary('gambar_empat')->nullable();
            $table->binary('gambar_lima')->nullable();
            $table->binary('gambar_enam')->nullable();
            $table->string('lokasi', 100);
            $table->string('gender', 50);
            $table->string('deskripsi', 200);
            $table->text('deskripsi_panjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}


