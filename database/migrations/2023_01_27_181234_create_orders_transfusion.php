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
        //codes for testing
        Schema::create('order_transfusions', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_order_id')->nullable();
            $table->enum('type',['IV','Blood']);
            $table->string('fluid_name');
            $table->string('instruction');
            $table->dateTime('date_started')->nullable();
            $table->dateTime('date_stopped')->nullable();
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
        Schema::dropIfExists('orders_transfusion');
    }
};
