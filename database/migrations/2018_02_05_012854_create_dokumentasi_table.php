<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumentasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_kategori',30);
            $table->timestamps();
        });
        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dokumen');
            $table->integer('kategoriFK')->unsigned();
            $table->foreign('kategoriFK')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('keterangan');
            $table->string('tanggal');
            $table->string('usernameFK',30);
            $table->foreign('usernameFK')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('dokumen');
        Schema::dropIfExists('kategori');
    }
}
