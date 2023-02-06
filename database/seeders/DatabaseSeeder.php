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
        \App\Models\User::create([
            'name' => 'User Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 1,
            'lastname' => 'Admin',
            'firstname' => 'User',
            'birthdate' => fake()->dateTime(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
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
            'usertype' => 1,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'birthdate' => fake()->dateTime(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
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
                'usertype' => 2,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',

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
                'usertype' => 3,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',
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
                'usertype' => 4,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'birthdate' => fake()->dateTime(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',
                'department_id' => 8,
                'specialization' => Arr::random(['ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        } 
        
        // $this->call([
        //     BedSeeder::class,
        //     DepartmentSeeder::class,
        //     NurseAssignmentSeeder::class,
        //     PatientSeeder::class,
        // ]);
        
    }
}
