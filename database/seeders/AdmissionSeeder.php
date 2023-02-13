<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER FOR ADMISSIONS

        // 1-5 Private Rooms              
        \App\Models\AdmissionNew::create([
            'bed_id'                => 1,
            'patient_id'            => 1,
            'admitting_doctor_id'   => 11,
            'primary_doctor_id'     => 9,
            'type'                  => 'Inpatient',
            'complain'              => 'Dizzyness, body weakness, tremors',
            'impression_diagnosis'  => 'Diabetes Mellitus',
            'age'                   => 55,
            'weight'                => 60,
            'mental_status'         => 'Drowsy',
            'activities'            => 'CBR w/o BRP',
            'diet'                  => 'NPO',
            'tubes'                 => 'Foley catheter',
            'special_info'          => 'BP Qshift',
            'status'                => 'Admitted',
            'created_at'            => '2023-02-13 06:04:25',

            ]);

        \App\Models\AdmissionNew::create([
            'bed_id'                => 2,
            'patient_id'            => 2,
            'admitting_doctor_id'   => 11,
            'primary_doctor_id'     => 7,
            'type'                  => 'Inpatient',
            'complain'              => 'Chest pain, cough, fatigue, fever',
            'impression_diagnosis'  => 'Pneumonia',
            'age'                   => 30,
            'weight'                => 50,
            'mental_status'         => 'Stupor',
            'activities'            => 'Soft',
            'diet'                  => 'NPO',
            'tubes'                 => 'Foley catheter',
            'special_info'          => 'BP Qshift',
            'status'                => 'Admitted',
            'created_at'            => '2023-01-30 09:10:25',

            ]);

        \App\Models\AdmissionNew::create([
            'bed_id'                => 21,
            'patient_id'            => 3,
            'admitting_doctor_id'   => 12,
            'primary_doctor_id'     => 6,
            'type'                  => 'Inpatient',
            'complain'              => 'Chest pain, cough, fatigue, fever',
            'impression_diagnosis'  => 'Pneumonia',
            'age'                   => 30,
            'weight'                => 50,
            'mental_status'         => 'Conscious',
            'activities'            => 'Soft',
            'diet'                  => 'NPO',
            'tubes'                 => 'None',
            'special_info'          => 'BP Qshift',
            'status'                => 'Outpatient',
            'created_at'            => '2022-12-15 01:30:25',

            ]);



    }
}

