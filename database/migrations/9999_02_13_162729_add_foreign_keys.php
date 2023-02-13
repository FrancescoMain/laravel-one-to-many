<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
          Schema :: table('posts', function(Blueprint $table){

            //    $table -> bigInteger('person_id') -> unsigned();

            //    $table -> foreign('person_id')
            //           -> referencies('id')
            //           -> on('people');

              $table -> foreignId('people_id') -> constrained();

          });

           Schema::table('person_details', function (Blueprint $table) {

             $table -> foreignId('people_id') -> constrained();
             $table -> primary('people_id');


          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
