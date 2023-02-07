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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('usertype')->nullable();
            // Users: 1=>admin, 2=>doctor, 3=>nurse, 4=>chiefnurse
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->enum('specialization', ['Internal Medicine', 'Surgeon', 'Pediatrician', 'Ob-gyne', 'Orthopedic', 'Cardiologist', 'Neurologist', 'Registered Nurse', 'ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse', 'IT Officer', 'Admission Officer'])->nullable();
            $table->string('imagepath')->nullable()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active')->nullable();           

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
