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
        //
        Schema::table('kuliahs', function (Blueprint $table) {
            $table->string('pengalaman', 100) -> after('id_profil');
        });

        Schema::table('profils', function (Blueprint $table) {
            $table->string('foto_profil', 100) -> after('id_profil');
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
        Schema::table('kuliahs', function (Blueprint $table) {
            $table->dropColumn('pengalaman', 100);
        });
        Schema::table('profils', function (Blueprint $table) {
            $table->dropColumn('foto_profil', 100);
        });
    }
};
