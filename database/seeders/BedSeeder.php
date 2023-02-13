<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // SEEDER FOR BEDS
        $num = 101;
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\Bed::create([
                'bednum' => $i,
                'room' => $num++,
                'room_type' => 'Private',
                'station' => 'Nurse Station 1',              
            ]);
        }

        $bed = 6;
        for ($room = 121; $room <= 125; $room++) {            

            for($i = 0; $i<= 1; $i++) {
                \App\Models\Bed::create([
                    'bednum' => $bed + $i,
                    'room' => $room,
                    'room_type' => 'Semi-Private',
                    'station' => 'Nurse Station 1',              
                ]);
            }
            $bed += 2;
        }

        for ($bed = 21; $bed <= 30; $bed++) {   
                \App\Models\Bed::create([
                    'bednum' => $bed,
                    'room' => 'Male Ward',
                    'room_type' => 'Ward',
                    'station' => 'Nurse Station 2',             
                ]);
        }

        \App\Models\Bed::create([
            'bednum' => 51,
            'room' => 'Female Ward',
            'room_type' => 'Ward',
            'station' => 'Nurse Station 3',             
        ]);

        \App\Models\Bed::create([
            'bednum' => 'Outpatient',
            'room' => 'Outpatient',
            'room_type' => 'Outpatient',
            'station' => 'Outpatient',              
        ]);
    }
}
