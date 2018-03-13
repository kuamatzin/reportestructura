<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('municipality')->nullable();
            $table->string('responsible')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('neighborhood')->nullable();
            $table->date('date');
            $table->time('time');
            $table->integer('assistans')->nullable();
            $table->string('photo')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}
