<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER DEPARTMENT

        $department = [
            [
                'usertype' => 'doctor',
                'name' => 'Emergency',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'ICU',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'OB/GYN',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Pediatrics',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Surgery',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Cardiology',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Orthopedics',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'Nursing Department',
            ],
            [
                'usertype' => 'doctor',
                'name' => 'IT Department',
            ],            
        ];
        foreach ($department as $dept) {
            \App\Models\Department::create($dept);
        }
    }
}
