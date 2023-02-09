<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE TRIGGER insert_doctor_orders_on_admissions_insert
        AFTER INSERT ON admissions
        FOR EACH ROW
        BEGIN
          INSERT INTO doctor_orders (admission_id, doctor_id, date_ordered)
          VALUES (NEW.id, NULL, NEW.admitted);
        END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS insert_doctor_orders_on_admissions_insert');
    }

};
