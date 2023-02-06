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
        Schema::create('progress_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_order_id');
            $table->string('notes');
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
        Schema::dropIfExists('progress_notes');
    }
};
