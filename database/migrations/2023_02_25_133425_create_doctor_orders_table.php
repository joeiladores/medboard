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
        $table->unsignedBigInteger('admission_id')->constrained('admission_news')->onDelete('cascade');
        $table->unsignedBigInteger('doctor_id')->constrained('admission_news')->onDelete('cascade');
        $table->date('date_ordered')->nullable(); //nullable for testing
        $table->timestamps();

        $table->foreign('admission_id')->references('id')->on('admission_news');
        $table->foreign('doctor_id')->references('primary_doctor_id')->on('admission_news');
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
