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
        Schema::create('order_transfusions', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['IV','Blood']);
            $table->string('fluid_name');
            $table->string('instruction');
            $table->datetime('date_started')->nullable();
            $table->datetime('date_stopped')->nullable();
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
