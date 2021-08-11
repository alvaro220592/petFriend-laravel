<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
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
            $table->timestamps();
            $table->string('service');
            $table->string('pick_up');
            $table->dateTime('dateTime');
            $table->string('status')->default('aberto');
            // $table->foreignId('user_id')->constraint()->references('id')->on('users');
            $table->foreignId('client_id')->constraint()->references('id')->on('clients')->onDelete('cascade');
            $table->foreignId('pet_id')->constraint()->references('id')->on('pets')->onDelete('cascade');
            // não vai ter onDelete('cascade') e não funcionou a inserção com o user_id
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
}
