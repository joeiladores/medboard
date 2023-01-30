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
        Schema::create('doctor_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('admission_id');
            $table->integer('doctor_id');
            $table->integer('nurse_id');
            $table->date('date_ordered');
            $table->enum('type', ['Medication', 'Transfusion', 'Treatment']);
            $table->string('progress_notes');
            $table->timestamps();


        ///////////////////////////////// READY TO CONNECT WITH ADMISSIONS TABLE/////////////////////////////////////////////////////
        // Schema::create('doctor_orders', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('admission_id');
        //     $table->unsignedBigInteger('doctor_id');
        //     $table->unsignedBigInteger('nurse_id');
        //     $table->date('date_ordered');
        //     $table->enum('type', ['Medication', 'Transfusion', 'Treatment']);
        //     $table->string('progress_notes');
        //     $table->timestamps();

        //     $table->foreign('admission_id')->references('id')->on('admission');
        //     $table->foreign('doctor_id')->references('admitting_doctor_id')->on('admission');
        //     $table->foreign('nurse_id')->references('id')->on('nurse_assignment');
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
