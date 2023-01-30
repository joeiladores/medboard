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
        Schema::create('order_treatments', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_order_id')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('instruction');
            $table->date('date_started');
            $table->date('date_done')->nullable();
            $table->timestamps();
        });



         ///////////////////////////////// READY TO CONNECT WITH ADMISSIONS TABLE/////////////////////////////////////////////////////
        // Schema::create('order_treatments', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('doctor_order_id');
        //     $table->string('name');
        //     $table->string('type');
        //     $table->string('instruction');
        //     $table->date('date_started');
        //     $table->date('date_done')->nullable()->default("TBD");
        //     $table->timestamps();

        //     $table->foreign('doctor_order_id')->references('id')->on('doctor_orders');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_treatments');
    }
};
