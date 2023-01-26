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
        Schema::create('orders_medication', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_order_id');
            $table->string('medication');
            $table->string('dose');
            $table->integer('quantiy');
            $table->enum('unit',['gram','milligram','microgram']);
            $table->string('frequency');
            $table->string('instructions');
            $table->dateTime('date_started');
            $table->dateTime('date_stopped');
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
        Schema::dropIfExists('orders_medication');
    }
};
