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
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->text('body');
            $table->string('quarter');
            $table->integer('explaining_rate');
            $table->integer('class_again_rate');
            $table->integer('puntuality_rate');
            $table->integer('evaluation_rate');
            $table->integer('general_rate');
            $table->string('ip_address')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table
                ->foreign('quarter')
                ->references('period')
                ->on('quarters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinions');
    }
};
