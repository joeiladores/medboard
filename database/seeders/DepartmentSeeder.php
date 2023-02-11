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
                'name' => 'Emergency',
            ],
            [
                'name' => 'ICU',
            ],
            [
                'name' => 'OB/GYN',
            ],
            [
                'name' => 'Pediatrics',
            ],
            [
                'name' => 'Surgery',
            ],
            [
                'name' => 'Cardiology',
            ],
            [
                'name' => 'Orthopedics',
            ],
            [
                'name' => 'Nursing Department',
            ],
            [
                'name' => 'IT Department',
            ],            
        ];
        foreach ($department as $dept) {
            \App\Models\Department::create($dept);
        }
    }
}
