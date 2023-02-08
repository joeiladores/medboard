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
            $table->foreignId('bed_id')->constrained('beds')->onDelete('cascade')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade')->nullable();
            $table->foreignId('primary_doctor_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->date('admitted');
            $table->text('complain');
            $table->string('diagnosis');
            $table->integer('age');
            $table->float('weight');
            $table->enum('activities', ['Ambulant', 'Dangle and sit up','Bedrest with BRP','CBR w/o BRP',])->nullable();
            $table->enum('diet', ['NPO', 'dat','soft','clearLiquids','genliquids','lslfnpo','tidPremeals'])->nullable();
            $table->enum('tubes', ['foleyCatheter', 'thoracicTube','ngt','cvp'])->nullable();
            $table->enum('specialinfo', ['weightDaily', 'bpqshift','neuroVS','abdominalGirth',])->nullable();
            $table->enum('mentalStatus', ['conscious', 'drowsy','stupor','unconscious','comatose',])->nullable();
            $table->enum('status', ['Admitted','Discharged'])->nullable();
            $table->date('date_time_discharged')->nullable();
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
        Schema::dropIfExists('patients');
    }
};