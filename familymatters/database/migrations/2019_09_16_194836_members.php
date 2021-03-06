<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:create('projects', function(Blueprint $table){
          $table->increments('id');
          $table->text('name');
          $table->text('habbits');
          $table->timestamps('updated_at');
          $table->timestamps('created_at');
        })
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
}
