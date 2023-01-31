<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('date_time_admitted');
            $table->string('complain');
            $table->string('impression_diagnosis');
            $table->integer('age');
            $table->float('weight');
            $table->string('activities');
            $table->string('diet');
            $table->string('tubes');
            $table->string('special_info');
            $table->date('date_time_discharge');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
