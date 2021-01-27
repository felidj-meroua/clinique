<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_pati');
             $table->string('Prenom_pati');
             $table->string('num_de_secu_soci');
             $table->string('date_naissance_pati');
            $table->string('num_pati');
            $table->string('adresse_pati');
            $table->string('email_pati');
            $table->string('mal_chroniques');
            $table->string('allergies');
            $table->string('commentaires');
            $table->string('imageries');

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
        Schema::dropIfExists('patient');
    }
}
