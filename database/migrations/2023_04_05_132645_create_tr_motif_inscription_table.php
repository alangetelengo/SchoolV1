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
        // Schema::create('tr_motif_inscription', function (Blueprint $table) {
        //     $table->primary("code_motif_inscription");
        //     $table->string("code_motif_inscription",16);
        //     $table->double("prix_inscription");
        //     $table->string("code_cycle",16);
        //     $table->string("code_anneeac",16);

        //     $table->foreign("code_cycle")->references("code_cycle")->on("tr_cycle")->onDelete("cascade")->onUpdate("cascade");
        //     $table->foreign("code_anneeac")->references("code_anneeac")->on("tr_anneeac")->onDelete("cascade")->onUpdate("cascade");
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tr_motif_inscription');
    }
};
