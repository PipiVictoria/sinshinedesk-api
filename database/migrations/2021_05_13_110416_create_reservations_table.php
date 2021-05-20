<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('namePers');
            $table->string('firstname_pers');
            $table->string('email_pers');
            $table->integer('phone_pers');
            $table->string('jour_res');
            $table->time('hour_res'); 
            $table->integer('nbPers_res');
            $table->integer('camps_id');
            $table->string('allergies');
            $table->string('table');
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
        Schema::dropIfExists('reservations');
    }
}
