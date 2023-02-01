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
            'name' => 'Joelyn Ladores',
            'email' => 'joelynladores@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Ladores',
            'firstname' => 'Joelyn',
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::create([
            'name' => 'Rica Guno',
            'email' => 'ricaguno@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Guno',
            'firstname' => 'Rica',
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::create([
            'name' => 'Norman Mendiola',
            'email' => 'normanmendiola@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Mendiola',
            'firstname' => 'Norman',
            'gender' => 'Male',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
        ]);

        \App\Models\User::create([
            'name' => 'Jomar Neri',
            'email' => 'jomarneri@gmail.com',
            'password' => Hash::make('password123'),
            'usertype' => 'Admin',
            'lastname' => 'Neri',
            'firstname' => 'Jomar',
            'gender' => 'Male',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
            'department' => Arr::random(['IT Department']),
            'specialization' => Arr::random(['Software Developer']),
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
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => fake()->lastName(),
            'gender' => 'Female',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber,
            'status' => 'Active',
            'department' => Arr::random(['Admission']),
            'specialization' => Arr::random(['Admission Officer']),
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
                'usertype' => 'Doctor',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',

                'department' => Arr::random(['Emergency Department', 'Intensive Care Unit (ICU)', 'Obstetrics and Gynecology (OB/GYN)', 'Pediatrics', 'Surgery', 'Cardiology', 'Orthopedics']),

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
                'usertype' => 'Nurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',
                'department' => 'Nursing Department',
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
                'usertype' => 'Chief Nurse',
                'lastname' => $lastname,
                'firstname' => $firstname,
                'middlename' => fake()->lastName(),
                'gender' => $gender,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber,
                'status' => 'Active',
                'department' => 'Nursing Department',
                'specialization' => Arr::random(['ICU Nurse', 'ER Nurse', 'Geriatic Nurse', 'Orthopedic Nurse', 'Oncology Nurse']),
            ]);
        }

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
                    'room_type' => 'Semi Private',
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

        // Seeder for Nurse Assignment to Station    
        for($i = 16; $i <= 17; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-01-30 07:00:00',
                'datetime_end' => '2023-02-04 15:00:00',
                'shift' => 'AM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 18; $i <= 19; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-04 15:00:00',
                'datetime_end' => '2023-01-30 23:00:00',
                'shift' => 'PM Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 20; $i <= 21; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-04 23:00:00',
                'datetime_end' => '2023-01-30 07:00:00',
                'shift' => 'Night Shift',
                'station' => 'Nurse Station 1',             
            ]);
        }

        for($i = 22; $i <= 22; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-01-30 07:00:00',
                'datetime_end' => '2023-02-04 15:00:00',
                'shift' => 'AM Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }

        for($i = 23; $i <= 23; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-04 15:00:00',
                'datetime_end' => '2023-01-30 23:00:00',
                'shift' => 'PM Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }

        for($i = 24; $i <= 24; $i++) {
            \App\Models\NurseAssignment::create([
                'user_id' => $i,
                'datetime_start' => '2023-02-04 23:00:00',
                'datetime_end' => '2023-01-30 07:00:00',
                'shift' => 'Night Shift',
                'station' => 'Nurse Station 2',             
            ]);
        }
        

    }
}
