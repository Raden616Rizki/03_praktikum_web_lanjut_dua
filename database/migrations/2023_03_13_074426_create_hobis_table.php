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
        Schema::create('hobis', function (Blueprint $table) {
            $table->id('id_hobi');
            $table->unsignedBigInteger('id_profil');
            $table->string('gambar', 100);
            $table->string('hobi', 100) -> nullable();
            $table->timestamps();

            $table->foreign('id_profil')->references('id_profil')->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobis');
    }
};
