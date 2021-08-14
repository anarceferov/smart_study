<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_image');
            $table->string('title');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->longText('content');
            $table->string('slug');
            $table->enum('status' , ['publish' , 'pendding' , 'check'])->default('check');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }


    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
