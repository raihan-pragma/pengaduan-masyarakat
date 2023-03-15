<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('tgl_pengaduan');
            $table->string('judul');
            $table->string('isi');
            $table->string('lampiran');
            $table->string('lokasi');
            $table->enum('status', ['menunggu','proses', 'selesai', 'ditolak'])->nullable()->default('menunggu');
            $table->string('tanggapan')->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
}
