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
            $table->foreignId('user_id')->default('3');
            $table->date('tgl_pengaduan');
            $table->string('judul');
            $table->string('isi');
            $table->string('lampiran');
            $table->string('lokasi');
            // $table->enum('status', ['proses', 'selesai'])->nullable()->default('proses');
            $table->timestamps();

            $table->foreign('user_id')
                    ->on('users')
                    ->references('id');
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
