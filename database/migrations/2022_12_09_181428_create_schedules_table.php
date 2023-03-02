<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_nrc');
            $table->string('begin_time');
            $table->string('end_time');
            $table->string('building')->nullable();
            $table->string('type');
            $table->string('room')->nullable();
            $table->integer('credits');
            $table->boolean('is_monday');
            $table->boolean('is_tuesday');
            $table->boolean('is_wednesday');
            $table->boolean('is_thursday');
            $table->boolean('is_friday');
            $table->boolean('is_saturday');
            $table->boolean('is_sunday');
            $table->timestamps();
            
            $table->foreign('subject_nrc')->references('nrc')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
