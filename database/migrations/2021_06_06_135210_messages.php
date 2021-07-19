<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->bigInteger('number')->nullable();
            $table->string('topic');
            $table->longText('message');
            $table->enum('status' , ['baxilmayib' , 'baxilir' , 'arasdirilir' , 'tamamlanib'])->default('baxilmayib');
            $table->string('user_name')->nullable();
            $table->date('baxilir_date')->nullable();
            $table->date('arasdirilir_date')->nullable();
            $table->date('tamamlanib_date')->nullable();            
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
