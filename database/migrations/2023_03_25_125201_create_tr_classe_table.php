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
        Schema::create('tr_classe', function (Blueprint $table) {
            $table->id();
            $table->string('lib_classe_long',40)->unique();
            $table->string('lib_classe_court',20)->unique();
            $table->smallInteger('nombre')->default(1);
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('niveau_id');
            $table->boolean('supprimer')->default(false);
            $table->foreign("salle_id")->references("id")->on("tr_salle")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("niveau_id")->references("id")->on("tr_niveau")->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('tr_classe');
    }
};
