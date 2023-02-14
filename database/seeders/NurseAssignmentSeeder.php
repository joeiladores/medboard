<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NurseAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder for Nurse Assignment to Station    
        for($i = 13; $i <= 14; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 07:00:00',
                'datetime_end' => '2023-02-15 15:00:00',
                'shift' => 'AM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 15; $i <= 16; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 15:00:00',
                'datetime_end' => '2023-02-15 23:00:00',
                'shift' => 'PM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 17; $i <= 18; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 23:00:00',
                'datetime_end' => '2023-02-16 07:00:00',
                'shift' => 'Night Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 19; $i <= 19; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 07:00:00',
                'datetime_end' => '2023-02-15 15:00:00',
                'shift' => 'AM Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }

        for($i = 20; $i <= 20; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 15:00:00',
                'datetime_end' => '2023-02-15 23:00:00',
                'shift' => 'PM Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }

        for($i = 21; $i <= 21; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 23:00:00',
                'datetime_end' => '2023-02-15 07:00:00',
                'shift' => 'Night Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }

        for($i = 23; $i <= 23; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 07:00:00',
                'datetime_end' => '2023-02-15 15:00:00',
                'shift' => 'AM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 24; $i <= 24; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-15 15:00:00',
                'datetime_end' => '2023-02-15 23:00:00',
                'shift' => 'PM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }
    }
}
