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
            
            $table->string('usertype');
            // Users: 1=>admin, 2=>doctor, 3=>nurse, 4=>chiefnurse
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->date('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('address');
            $table->string('phone')->nullable();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->foreignId('specialization_id')->constrained('specializations')->onDelete('cascade');
            $table->string('imagepath')->nullable()->default(null);
            $table->enum('status', ['active', 'inactive'])->default('active');  
            
            $table->longText('bio')->nullable();
            $table->string('avatar')->default('default.png');

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
