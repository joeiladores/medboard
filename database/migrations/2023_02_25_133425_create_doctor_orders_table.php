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
    //codes for testing // Waiting for admissions - manual add to DB for now
    Schema::create('doctor_orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('admission_id');
        $table->foreignId('doctor_id');
        $table->foreignId('nurse_id');
        $table->date('date_ordered');
        $table->string('order_type');
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
        Schema::dropIfExists('doctor_orders');
    }
};
