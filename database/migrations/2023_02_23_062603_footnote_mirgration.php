<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::update('footnote', function (Blueprint $table) {
            $table->increments('id');
            $table->string('penulis_1');
            $table->string('penulis_2');
            $table->string('penulis_3');
            $table->longText('judul');
            $table->longText('sumber');
            $table->integer('volume');
            $table->integer('nomor');
            $table->integer('tahun');
            $table->integer('halaman_awal');
            $table->integer('halaman_akhir');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
