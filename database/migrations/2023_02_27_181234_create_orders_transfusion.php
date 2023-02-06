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
       ///////////////////////////////// READY TO CONNECT WITH ADMISSIONS TABLE/////////////////////////////////////////////////////
        Schema::create('order_transfusions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_order_id');
            $table->enum('type',['IV','Blood']);
            $table->string('fluid_name');
            $table->string('instruction');
            $table->date('date_started')->nullable();
            $table->date('date_stopped')->nullable();
            $table->timestamps();

            $table->foreign('doctor_order_id')->references('id')->on('doctor_orders');
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
