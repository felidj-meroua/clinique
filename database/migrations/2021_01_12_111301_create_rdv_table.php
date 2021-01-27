<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdv', function (Blueprint $table) {
            $table->string('idmed_rdv');
            $table->string('idpatient_rdv');
             $table->string('date_rdv');
             $table->string('heure_deb_rdv');
             $table->string('heure_fin_rdv');
             $table->string('date_naissance_pati');
            $table->string('motif');
           
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
        Schema::dropIfExists('rdv');
    }
}
