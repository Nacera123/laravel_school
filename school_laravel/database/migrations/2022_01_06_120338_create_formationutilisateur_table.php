<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationutilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formationutilisateur', function (Blueprint $table) {
            $table->id('id_formationutilisateur');
            $table->bigInteger('id_utilisateur')->unsigned()->index();
            $table->foreign ('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->bigInteger('id_formation')->unsigned()->index();
            $table->foreign ('id_formation')->references('id_formation')->on('formations')->onDelete('cascade');
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
        Schema::dropIfExists('formationutilisateur');
    }
}
