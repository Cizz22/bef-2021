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
            $table->string('instagram');
            $table->string('school_name');
            $table->string('address');
            $table->string('photo_path');
            $table->enum('peminatan', ["Saintek" , "Soshum" , "Campuran"]);
            $table->string('payment_proof_path');
            $table->enum('payment_verif_status', ['Belum Bayar', 'Terverifikasi', 'Ditolak'])->default('Belum Bayar');
            $table->enum('info_source', ["Media Sosial BEF 2021",
            "Media Sosial selain BEF 2021 (info lomba, dll)",
            "Grup WA/Line/dll",
            "Sekolah (guru, dll)",
            "Teman/keluarga"]);
            $table->unsignedBigInteger('ptn1_id');
            $table->string('prodi_1');
            $table->unsignedBigInteger('ptn2_id');
            $table->string('prodi_2');
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
