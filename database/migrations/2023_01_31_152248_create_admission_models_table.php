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
        Schema::create('admission_models', function (Blueprint $table) {
            $table->id();
            $table->date('date_time_admitted');
            $table->string('complain');
            $table->string('impression_diagnosis');
            $table->integer('age');
            $table->float('weight');
            $table->string('activities');
            $table->string('diet');
            $table->string('tubes');
            $table->string('special_info');
            table->string('status');
            $table->date('date_time_discharge');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admission_models');
    }
};