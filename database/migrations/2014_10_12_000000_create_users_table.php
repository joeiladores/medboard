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
            
            $table->enum('usertype', ['Admin', 'Doctor', 'Nurse', 'Chief Nurse'])->default('Admin')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('department', ['Emergency Department', 'Intensive Care Unit (ICU)', 'Obstetrics and Gynecology (OB/GYN)', 'Pediatrics', 'Surgery', 'Cardiology', 'Orthopedics', 'Nursing Department', 'IT Department', 'Admission'])->nullable();
            $table->enum('specialization', ['Internal Medicine', 'Surgeon', 'Pediatrician', 'Ob-gyne', 'Orthopedic', 'Cardiologist', 'Neurologist', 'Registered Nurse', 'ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse', 'Software Developer', 'Admission Officer'])->nullable();
            $table->string('imagepath')->nullable()->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active')->nullable();           

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
