<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('Nationality' , 500);
            $table->string('Number');
            $table->string('Type');
            $table->string('Phone');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('Age');
            $table->string('Natonality1');
            $table->string('expmonth');
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
        Schema::dropIfExists('posts');
    }
    
}
