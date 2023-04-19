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
        Schema::create('tr_etablissement', function (Blueprint $table) {
            $table->id();
            $table->string('lib_etablissement',50)->unique();
            $table->string('sigle',40)->nullable();
            $table->string('devise',50)->nullable();
            $table->string('adresse',50)->nullable();
            $table->string('code_postal',50)->nullable();
            $table->string('ville',50)->nullable();
            $table->string('telephone',15)->nullable();
            $table->string('email',30)->nullable();
            $table->string('site_web',30)->nullable();
            $table->string('logo',175)->nullable();

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
        Schema::dropIfExists('tr_etablissement');
    }
};
