<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrIdentificationPersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_identification_personne', function (Blueprint $table) {
            $table->id();
            $table->string('nom',75);
            $table->string('prenom',75)->nullable();
            $table->enum('sexe',['M','F']);
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->longText("photo",255)->nullable(); //base64
            $table->string("telephone1",15)->nullable();
            $table->string("telephone2",15)->nullable();
            $table->string("adresse")->nullable();
            $table->string('personne_string')->nullable()->unique();
            $table->enum("type_personne",["Elève","Parent","Enseignant","Employé"]);
            $table->boolean('supprimer')->default(false);
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
        Schema::dropIfExists('tr_identification_personne');
    }
}
