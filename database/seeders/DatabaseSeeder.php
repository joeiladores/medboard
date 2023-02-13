<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
               
        $this->call([
            DepartmentSeeder::class,
            SpecializationSeeder::class,
            UserSeeder::class,
            BedSeeder::class,            
            NurseAssignmentSeeder::class,
            PatientSeeder::class,
        ]);
       
    }
}
