<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test2_id');
            $table->string('t3Name');
            $table->string('t3Address');
            $table->string('t3Email');
            $table->boolean('3active');
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
        Schema::dropIfExists('test3s');
    }
}
