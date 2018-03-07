<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->integer('login')->unsigned();
            $table->integer('role')->unsigned();
            $table->string('nama_lengkap',50)->comment("Nama Lengkap");
            $table->String('kelas',10)->comment("Kelas woy, gapunya kelas murid buangan");
            $table->String('divisi',15)->comment("Divisinya tau ga? apa cuman numpang nama?");
            $table->String('photo',100)->comment("Masukin foto lu.")->default("");
            $table->Text('biodata')->comment("Apa aja tentang diri lu");
            $table->Text('alamat')->comment("Alamat rumah, jangan bilang ga tau alamat rumah");
            $table->date('tgl_lahir')->comment("Tanggal lahir sendiri aja ga tau?");
            $table->timestamps();
        });
        Schema::table('anggota', function (Blueprint $table) {
            $table->foreign('login')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role')->references('id_role')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
