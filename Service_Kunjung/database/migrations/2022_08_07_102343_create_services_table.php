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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('nama');
            $table->string('no_polisi');
            $table->date('tgl_boking');
            $table->string('jenis_service');
            $table->integer('jumlah')->nullable();
            $table->string('alamat');
            $table->string('no_hp');
            $table->unsignedbigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('CASCADE');
            // $table->unsignedbigInteger('id_mekanik');
            // $table->foreign('id_mekanik')->references('id')->on('mekaniks')->onDelete('CASCADE');
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
        Schema::dropIfExists('services');
    }
};
