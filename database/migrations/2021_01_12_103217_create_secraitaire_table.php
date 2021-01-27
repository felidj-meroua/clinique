<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecraitaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secraitaires', function (Blueprint $table) {
            $table->id('id_sec');
            $table->string('Nom_sec');
             $table->string('Prenom_sec');
             $table->string('motdepasse_sec');
            $table->string('email_sec');
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
        Schema::dropIfExists('secraitaire');
    }
}
