<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastercabangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercabang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_cabang');
            $table->string('nama_cabang');
            $table->integer('junlah_pegawai');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->integer('kode_pos');
            $table->integer('no_telp');
            $table->string('google_maps');
            $table->string('email');
            $table->string('status');

            $table->foreign('kode_cabang')->references('id')->on('mastercabang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastercabang');
    }
}
