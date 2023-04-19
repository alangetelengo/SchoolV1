<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_salle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lib_salle',30)->unique();
            $table->smallInteger('nombre_eleve')->default(1);
            $table->smallInteger('capacite')->default(1);
            $table->unsignedInteger('anneeac_id');
            $table->boolean('supprimer')->default(false);

            $table->foreign("anneeac_id")->references("id")->on("tr_anneeac")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('tr_salle');
    }
};
