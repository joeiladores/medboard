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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // SEEDER ADMIN
        \App\Models\User::factory()->create([
            'name' => 'Joelyn Ladores',
            'email' => 'joelynladores@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Ladores',
            'firstname' => 'Joelyn',
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->randomNumber(5, true),
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Rica Guno',
            'email' => 'ricaguno@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Guno',
            'firstname' => 'Rica',
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->randomNumber(5, true),
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Norman Mendiola',
            'email' => 'normanmendiola@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Mendiola',
            'firstname' => 'Norman',
            'gender' => 'Male',
            'address' => fake()->address(),
            'phone' => fake()->randomNumber(5, true),
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Jomar Neri',
            'email' => 'jomarneri@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Neri',
            'firstname' => 'Jomar',
            'gender' => 'Male',
            'address' => fake()->address(),
            'phone' => fake()->randomNumber(5, true),
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        // SEEDER ADMISSION OFFICER
        $gender = Arr::random(['Male', 'Female']);
        if ($gender === 'Male') $firstname = fake()->firstNameMale();
        else $firstname = fake()->firstNameFemale();
        $lastname = fake()->lastName();
        \App\Models\User::factory()->create([
            'name' => $firstname . ' ' . $lastname,
            'email' => fake()->freeEmail(),
            'password' => Hash::make('password123'),
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->randomNumber(5, true),
            'status' => 'Active',
            'department' => Arr::random(['Admission']),
            'specialization' => Arr::random(['Admission Officer']),
        ]);


        // SEEDER FOR DOCTORS
        for ($x = 1; $x < 5; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::factory()->create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'Doctor',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->randomNumber(5, true),
                'status' => 'Active',

                'department' => Arr::random(['Emergency Department', 'Intensive Care Unit (ICU)', 'Obstetrics and Gynecology (OB/GYN)', 'Pediatrics', 'Surgery', 'Cardiology', 'Orthopedics']),

                'specialization' => Arr::random(['Internal Medicine', 'Surgeon', 'Pediatrician', 'Ob-gyne', 'Orthopedic', 'Cardiologist', 'Neurologist']),
            ]);
        }

        // SEEDERS FOR NURSES
        for ($x = 1; $x < 5; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::factory()->create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'Nurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->randomNumber(5, true),
                'status' => 'Active',
                'department' => 'Nursing Department',
                'specialization' => Arr::random(['ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        }

        // SEEDER FOR CHIEF NURSE
        for ($x = 1; $x < 1; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::factory()->create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'Chief Nurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->randomNumber(5, true),
                'status' => 'Active',
                'department' => 'Nursing Department',
                'specialization' => Arr::random(['ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        }
    }
}
