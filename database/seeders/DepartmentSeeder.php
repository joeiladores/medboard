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
                'usertype' => 2,
                'name' => 'Emergency',
            ],
            [
                'usertype' => 2,
                'name' => 'ICU',
            ],
            [
                'usertype' => 2,
                'name' => 'B/GYN',
            ],
            [
                'usertype' => 2,
                'name' => 'Pediatrics',
            ],
            [
                'usertype' => 2,
                'name' => 'Surgery',
            ],
            [
                'usertype' => 2,
                'name' => 'Cardiology',
            ],
            [
                'usertype' => 2,
                'name' => 'Orthopedics',
            ],
            [
                'usertype' => 3,
                'name' => 'Nursing Department',
            ],
            [
                'usertype' => 1,
                'name' => 'IT Department',
            ],            
        ];
        foreach ($department as $dept) {
            \App\Models\Department::create($dept);
        }
    }
}
