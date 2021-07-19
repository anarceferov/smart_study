<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Successes extends Migration
{

    public function up()
    {
        Schema::create('successes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('uni');
            $table->string('faculty');
            $table->string('degree');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('successes');
    }
}
