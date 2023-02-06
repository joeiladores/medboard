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
            $table->foreignId('bed_id')->constrained('beds')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('primary_doctor_id')->constrained('users')->onDelete('cascade');
            $table->date('admitted');
            $table->text('complain');
            $table->string('diagnosis');
            $table->integer('age');
            $table->float('weight');
            $table->float('mentalStatus');
            $table->text('activities');
            $table->text('diet');
            $table->text('tubes');
            $table->text('specialinfo');
            $table->text('status');
            $table->date('date_time_discharged');
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
};
