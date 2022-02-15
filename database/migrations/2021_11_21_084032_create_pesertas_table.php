<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('instagram')->nullable();;
            $table->string('school_name');
            $table->string('address')->nullable();
            $table->enum('kelas', ["10", "11", "12"])->nullable();
            $table->string('photo_path')->nullable();
            $table->enum('peminatan', ["Saintek", "Soshum", "Campuran"])->nullable();
            $table->string('payment_proof_path')->nullable();
            $table->enum('payment_verif_status', ['Belum terverifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum terverifikasi');
            $table->string('info_source')->nullable();
            $table->unsignedBigInteger('ptn1_id')->nullable();
            $table->string('prodi_1')->nullable();
            $table->unsignedBigInteger('ptn2_id')->nullable();
            $table->string('prodi_2')->nullable();
            $table->enum('jenjang', ['SMA', 'SMA2' , 'Mahasiswa']);
            $table->string('kode')->nullable();
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
        Schema::dropIfExists('pesertas');
    }
}
