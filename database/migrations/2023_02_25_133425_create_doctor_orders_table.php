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
        $table->unsignedBigInteger('admission_id')->constrained('admissions')->onDelete('cascade');
        $table->integer('doctor_id')->nullable(); //nullable for testing
        $table->date('date_ordered')->nullable(); //nullable for testing
        $table->timestamps();

        $table->foreign('admission_id')->references('id')->on('admissions');
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
