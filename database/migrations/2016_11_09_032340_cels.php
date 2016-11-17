<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cels', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('name');
            $table->string('photo')->nullable();
            $table->text('description')->nullable();

            $table->enum('categories',[
                "film",
                "tv"
            ])->nullable();


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
         Schema::dropIfExists('cels');
    }
}
