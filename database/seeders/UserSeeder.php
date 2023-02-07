<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER ADMIN
        \App\Models\User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password123'),
            'usertype' => 'admin',
            'lastname' => 'Admin',
            'firstname' => 'Admin',
            'birthdate' => fake()->dateTime(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'active',
            'department_id' => 9,
            'specialization' => 'IT Officer',
        ]);

        // SEEDER ADMISSION OFFICER
        $gender = Arr::random(['Male', 'Female']);
        if ($gender === 'Male') $firstname = fake()->firstNameMale();
        else $firstname = fake()->firstNameFemale();
        $lastname = fake()->lastName();
        \App\Models\User::create([
            'name' => $firstname . ' ' . $lastname,
            'email' => fake()->freeEmail(),
            'password' => Hash::make('password123'),
            'usertype' => 'admin',
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'birthdate' => fake()->dateTime(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'active',
            'department_id' => 9,
            'specialization' => 'Admission Officer',
        ]);


        // SEEDER FOR DOCTORS
        for ($x = 0; $x < 10; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'doctor',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'active',

                'department_id' => Arr::random([1, 2, 3, 4, 5, 6, 7]),

                'specialization' => Arr::random(['Internal Medicine', 'Surgeon', 'Pediatrician', 'Ob-gyne', 'Orthopedic', 'Cardiologist', 'Neurologist']),
            ]);
        }

        // SEEDERS FOR NURSES
        for ($x = 0; $x < 10; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'nurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'active',
                'department_id' => 8,
                'specialization' => Arr::random(['Registered Nurse', 'ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        }

        // SEEDER FOR CHIEF NURSE
        for ($x = 0; $x < 1; $x++) {
            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::create([
                'name' => $firstname . ' ' . $lastname,
                'email' => fake()->freeEmail(),
                'password' => Hash::make('password123'),
                'usertype' => 'chiefnurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'active',
                'department_id' => 8,
                'specialization' => Arr::random(['ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        } 

        $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
        \App\Models\User::create([
            'name' => $firstname . ' ' . $lastname,
            'email' => 'nurse@nurse.com',
            'password' => Hash::make('password123'),
            'usertype' => 'nurse',
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'birthdate' => fake()->dateTime(),
            'gender' => $gender,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'active',
            'department_id' => 8,
            'specialization' => 'Registered Nurse',
        ]);


            $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
            \App\Models\User::create([
                'name' => $firstname . ' ' . $lastname,
                'email' => 'doctor@doctor.com',
                'password' => Hash::make('password123'),
                'usertype' => 'doctor',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'active',
                'department_id' => 5,
                'specialization' => 'Surgeon',
            ]);
    }
}
