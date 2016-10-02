<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagsTable extends Migration
{
    public function up(){
        Schema::create('cambara_tags',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::drop('cambara_tags');
    }
}