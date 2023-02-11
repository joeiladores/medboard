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
        Schema::create('admission_news', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('bed_id')->constrained('beds')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('admitting_doctor_id')->constrained('users')->onDelete('cascade');

            $table->enum('type', ['Inpatient', 'Outpatient']);
            $table->string('complain');
            $table->string('impression_diagnosis');
            $table->integer('age');
            $table->float('weight');
            $table->enum('mental_status', ['Conscious','Drowsy','Stupor','Unconscious','Comatose']);
            $table->enum('activities', ['Ambulant', 'Dangle & sit up', 'Bedrest w/ BRP', 'CBR w/o BRP', 'others']);
            $table->enum('diet', ['NPO','DAT','Soft','Clear liquids','Gen. liquids', 'others']);
            $table->enum('tubes', ['Foley catheter', 'Thoractic tube', 'NGT', 'CVP', 'others']);
            $table->enum('special_info', ['Weigh daily', 'BP Qshift', 'Neuro VS', 'Abdominal girth', 'others']);
            $table->enum('status', ['Admitted', 'Discharged']);

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
        Schema::dropIfExists('admission_news');
    }
};
