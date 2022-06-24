<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonmahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calonmahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('jenis_kelamin');
            $table->string('tgl');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('asal_sekolah');
            $table->string('email');
            $table->bigInteger('id_jurusan');
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
        Schema::dropIfExists('calonmahasiswa');
    }
}
