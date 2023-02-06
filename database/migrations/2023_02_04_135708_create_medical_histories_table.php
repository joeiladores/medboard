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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->date('date');
            $table->string('conditions');
            $table->string('symptoms');
            $table->string('medications');
            $table->string('allergies');
            $table->string('bad_habit');

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
        Schema::dropIfExists('medical_histories');
    }
};
