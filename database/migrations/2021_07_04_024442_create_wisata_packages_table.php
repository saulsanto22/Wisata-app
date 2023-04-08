<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisataPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata_packages', function (Blueprint $table) {
         $table->bigIncrements('id');
            $table->string('judul');
            $table->string('slug');
            $table->string('lokasi');
            $table->longText('deskripsi');
            $table->string('makanan_khas');
            $table->string('durasi');
            $table->string('type');
            $table->integer('harga_masuk');
            $table->softDeletes();
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
        Schema::dropIfExists('wisata_packages');
    }
}
