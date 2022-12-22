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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('moto');
            $table->text('deskripsi');
            $table->string('logo');
            $table->string('ak_twitter')->nullable();
            $table->string('ak_facebook')->nullable();
            $table->string('ak_youtube')->nullable();
            $table->string('ak_instagram')->nullable();
            $table->string('alamat');
            $table->string('email');
            $table->string('telp');
            $table->string('bg_1')->nullable();
            $table->string('bg_2')->nullable();
            $table->string('bg_3')->nullable();
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
        Schema::dropIfExists('profils');
    }
};
