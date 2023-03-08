<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER FOR THE PATIENT
        for($i = 1; $i <= 20; $i++) {
            $gender = Arr::random(['male', 'female']);
            if ($gender === 'male') $firstname = fake()->firstNameMale();
            else $firstname = fake()->firstNameFemale();
            $lastname = fake()->lastName();

            \App\Models\Patient::create([
                'lastname' => $lastname,
                'firstname' => $firstname,
                'midname' => fake()->lastName(),
                'marital_status' => Arr::random(['single', 'married', 'widowed']),
                'birth_date' => fake()->dateTime(),
                'gender' => $gender,
                'blood_type' => Arr::random(['A','B','AB','O']),
                'address' => fake()->Address(),
                'phone' => 11111,
                'health_insurance' => fake()->word(),
                'relative_fullname' => fake()->name(),
                'relation' => fake()->word(),
                'relative_phone' => 11111,
            ]);

        }
    }
}
