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
        Schema::create('tr_niveau', function (Blueprint $table) {
            $table->increments('id');
            $table->string("lib_niveau",15)->unique();
            $table->unsignedInteger("cycle_id");
            $table->foreign("cycle_id")->references("id")->on("tr_cycle")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('tr_niveau');
    }
};
