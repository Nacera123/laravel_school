<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('id_utilisateur');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('adresse');
            $table->string('telephone');
            $table->bigInteger('id_compte')->unsigned()->index();
            $table->foreign ('id_compte')->references('id_compte')->on('compte')->onDelete('cascade');
            $table->timestamps();

        });


        DB::table('utilisateurs')->insert(

            [
                'nom'=>'nace',
                'prenom'=>'nace',
                'age'=>70,
                'adresse'=>'70 rue de nace',
                'telephone'=>'07.07.07.70',
                'id_compte'=>1
        
            ],
        );

        DB::table('utilisateurs')->insert(
            [
                'nom'=>'nes',
                'prenom'=>'nes',
                'age'=>80,
                'adresse'=>'80 rue de nes',
                'telephone'=>'08.08.08.80',
                'id_compte'=>2
        
            ],
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
