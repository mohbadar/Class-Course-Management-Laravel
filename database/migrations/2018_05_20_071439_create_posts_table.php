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
	        $table->string('title');
            $table->enum('type', ['announcement', 'article'])->default('announcement');
            $table->text('content');
    	    $table->string('file')->nullable();
    	    $table->enum('file_type', ['image', 'doc'])->default('image');
    	    $table->integer('user_id');
            $table->timestamps();
	    


   	   // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');

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
