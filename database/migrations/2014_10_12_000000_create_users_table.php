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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->enum('usertype', ['Admin', 'Doctor', 'Nurse', 'Chief Nurse'])->default('Admin')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('department')->nullable();
            $table->string('specialization')->nullable();
            $table->string('imagepath')->nullable()->nullable();
            $table->enum('status', ['Active', 'Inactive'])->nullable();

            $table->timestamp('email_verified_at')->nullable();            
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
