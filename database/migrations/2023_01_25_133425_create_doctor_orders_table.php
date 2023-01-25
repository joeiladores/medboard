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
            $table->datetime('date_ordered');
            $table->enum('type', ['Medication', 'IV', 'Treatment']);
            $table->string('progress_notes');
            $table->integer('nurse_id');
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
