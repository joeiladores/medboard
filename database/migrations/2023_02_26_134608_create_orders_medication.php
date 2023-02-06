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
    ///////////////////////////////// READY TO CONNECT WITH ADMISSIONS TABLE/////////////////////////////////////////////////////
    Schema::create('order_medications', function (Blueprint $table) {
        $table->unsignedBigInteger('id');
        $table->unsignedBigInteger('doctor_order_id')->nullable();
        $table->string('medication');
        $table->double('dose');
        $table->unsignedInteger('quantity');
        $table->enum('unit', ['Gram', 'Milligram', 'Microgram']);
        $table->string('frequency');
        $table->text('instructions');
        $table->string('order_type')->default('Medication');
        $table->dateTime('date_started')->nullable();
        $table->dateTime('date_stopped')->nullable();
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
        Schema::dropIfExists('orders_medication');
    }
};
