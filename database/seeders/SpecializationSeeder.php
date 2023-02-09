<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialization = [
            [
                'usertype' => 'admin',
                'name' => 'IT Officer',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Internal Medicine',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Surgeon',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Pediatrician',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Ob-gyne',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Cardiologist',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Orthopedic',
            ],
            [
                'usertype' => 'nurse',
                'name' => 'Registered Nurse',
            ],
            [
                'usertype' => 'nurse',
                'name' => 'ICU Nurse',
            ],   
            [
                'usertype' => 'nurse',
                'name' => 'ER Nurse',
            ], 
            [
                'usertype' => 'nurse',
                'name' => 'Geriatic Nurse',
            ],          
        ];
        foreach ($specialization as $spec) {
            \App\Models\Specialization::create($spec);
        }
    }
}
