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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('midname');
            $table->enum('marital_status', ['single', 'married', 'widowed']);
            $table->date('birth_date');
            $table->enum('gender',['male','female']);
            $table->enum('blood_type',['A','B','AB','O']);
            $table->string('address');
            $table->string('phone');
            $table->string('health_insurance');
            $table->string('relative_fullname');
            $table->string('relation');
            $table->string('relative_phone');
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
        Schema::dropIfExists('patients');
    }
};
