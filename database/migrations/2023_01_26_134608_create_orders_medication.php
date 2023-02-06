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
        Schema::create('orders_medications', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_order_id')->nullable();
            $table->string('medication');
            $table->double('dose');
            $table->integer('quantity');
            $table->enum('unit',['Gram','Milligram','Microgram']);
            $table->string('frequency');
            $table->string('instructions');
            $table->date('date_started')->nullable();
            $table->date('date_stopped')->nullable();
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
