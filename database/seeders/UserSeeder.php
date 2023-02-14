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
        $gender = Arr::random(['Male', 'Female']);
        if ($gender === 'Male') $firstname = fake()->firstNameMale();
        else $firstname = fake()->firstNameFemale();
        $lastname = fake()->lastName();
        \App\Models\User::create([
            'name' => $firstname . ' ' . $lastname,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'usertype' => 'admin',
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'birthdate' => fake()->dateTime(),
            'gender' => $gender,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'active',
            'department_id' => 9,
            'specialization_id' => 1,
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
            'specialization_id' => 1,
        ]);


        // SEEDER FOR DOCTORS
        // for ($x = 0; $x < 10; $x++) {
        //     $gender = Arr::random(['Male', 'Female']);
        //     if ($gender === 'Male') $firstname = fake()->firstNameMale();
        //     else $firstname = fake()->firstNameFemale();
        //     $lastname = fake()->lastName();
        //     \App\Models\User::create([
        //         'name' => $firstname . ' ' . $lastname,
        //         'email' => fake()->freeEmail(),
        //         'password' => Hash::make('password123'),
        //         'usertype' => 'doctor',
        //         'lastname' => $lastname,
        //         'firstname' => $firstname,
        //         'middlename' => fake()->lastName(),
        //         'birthdate' => fake()->dateTime(),
        //         'gender' => $gender,
        //         'address' => fake()->address(),
        //         'phone' => fake()->phoneNumber,
        //         'status' => 'active',
        //         'department_id' => Arr::random([1, 2, 3, 4, 5, 6, 7]),
        //         'specialization_id' => Arr::random([2, 3, 4, 5, 6, 7]),
        //     ]);
        // }

        // Doctor 1 Surgeon
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
                'department_id' => 5,
                'specialization_id' => 3,
            ]);

            // Doctor 2 Surgeon
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
                'department_id' => 5,
                'specialization_id' => 3,
            ]);

            // Doctor 3 Cardiologist
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
                'department_id' => 6,
                'specialization_id' => 6,
            ]);

            // Doctor 4 Cardiologitst
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
                'department_id' => 6,
                'specialization_id' => 6,
            ]);

            // Doctor 5 Pulomonology
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
                'department_id' => 7,
                'specialization_id' => 7,
            ]);

            // Doctor Pulomonology
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
                'department_id' => 7,
                'specialization_id' => 7,
            ]);

            // Doctor 7 urology
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
                'department_id' => 10,
                'specialization_id' => 12,
            ]);

             // Doctor 8 Urology
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
                 'department_id' => 10,
                 'specialization_id' => 12,
             ]);

            // Doctor 9 Internist
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
                'department_id' => 11,
                'specialization_id' => 2,
            ]);

            // Doctor 10 Internist
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
                'department_id' => 11,
                'specialization_id' => 2,
            ]);



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
                'specialization_id' => Arr::random([8,9,10,11]),
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
                'specialization_id' => Arr::random([8,9,10,11]),
            ]);
        } 

        // $gender = Arr::random(['Male', 'Female']);
            if ($gender === 'Male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();
        \App\Models\User::create([
            'name' => $firstname . ' ' . $lastname,
            'email' => 'nurse@nurse.com',
            'password' => Hash::make('nurse@nurse.com'),
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
            'specialization_id' => 8,
        ]);


        // $gender = Arr::random(['Male', 'Female']);
        if ($gender === 'Male') $firstname = fake()->firstNameMale();
        else $firstname = fake()->firstNameFemale();
        $lastname = fake()->lastName();
        \App\Models\User::create([
            'name' => $firstname . ' ' . $lastname,
            'email' => 'doctor@doctor.com',
            'password' => Hash::make('doctor@doctor.com'),
            'usertype' => 'doctor',
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'birthdate' => fake()->dateTime(),
            'gender' => $gender,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'active',
            'department_id' => 10,
            'specialization_id' => 12,
        ]);
    }
}
