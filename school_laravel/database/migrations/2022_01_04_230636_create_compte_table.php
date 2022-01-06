<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte', function (Blueprint $table) {
            $table->id('id_compte');
            $table->string('login')->unique();
            $table->string('password');
            $table->string('secret_question');
            $table->string('answer');
            $table->string('type');
            $table->timestamps();
        });



        DB::table('compte')->insert(
        
            [ 
                'login'=>'nace',
                'password'=>'nace',
                'secret_question'=>'nace',
                'answer'=>'nace',
                'type'=>'admin'
            ],
            
        );
    
        DB::table('compte')->insert(
    
            [ 
                'login'=>'nes',
                'password'=>'nes',
                'secret_question'=>'nes',
                'answer'=>'nes',
                'type'=>'user'
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
        Schema::dropIfExists('compte');
    }
}
