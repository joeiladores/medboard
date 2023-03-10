<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdmissionNew;
use Illuminate\Support\Arr;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            
        AdmissionNew::create([
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
            'created_at'            => '2022-12-30 06:04:25',

        ]);

        AdmissionNew::create([
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
            'activities'            => 'Dangle & sit up',
            'diet'                  => 'NPO',
            'tubes'                 => 'Foley catheter',
            'special_info'          => 'BP Qshift',
            'status'                => 'Admitted',
            'created_at'            => '2023-01-20 09:10:25',

        ]);
        
        AdmissionNew::create([
            'bed_id'                => 27, 
            'patient_id'            => 3,
            'admitting_doctor_id'   => 12,
            'primary_doctor_id'     => 6,
            'type'                  => 'Outpatient',
            'complain'              => 'Chest pain, cough, fatigue, fever',
            'impression_diagnosis'  => 'Pneumonia',
            'age'                   => 30,
            'weight'                => 50,
            'mental_status'         => 'Conscious',
            'activities'            => 'Ambulant',
            'diet'                  => 'NPO',
            'tubes'                 => 'None',
            'special_info'          => 'BP Qshift',
            'status'                => 'Discharged',
            'created_at'            => '2023-01-26 01:30:25',

        ]);

        for($i = 6; $i <= 15; $i++) {
            AdmissionNew::create([
                'bed_id'                => $i,
                'patient_id'            => $i,
                'admitting_doctor_id'   => 12,
                'primary_doctor_id'     => 25,
                'type'                  => 'Inpatient',
                'complain'              => 'Chest pain, cough, fatigue, fever',
                'impression_diagnosis'  => 'Pneumonia',
                'age'                   => fake()->numberBetween(0, 100),
                'weight'                => 50,
                'mental_status'         => 'Conscious',
                'activities'            => 'Ambulant',
                'diet'                  => 'NPO',
                'tubes'                 => 'NGT',
                'special_info'          => 'BP Qshift',
                'status'                => 'Admitted',
                'created_at'            => '2023-02-14 01:30:25',
    
            ]);
        }

        for($i = 0; $i < 5; $i++) {
            AdmissionNew::create([
                'bed_id'                => 27, 
                'patient_id'            => 14 + $i,
                'admitting_doctor_id'   => 12,
                'primary_doctor_id'     => 6,
                'type'                  => 'Outpatient',
                'complain'              => 'Fever, body rashes',
                'impression_diagnosis'  => 'Measles',
                'age'                   => fake()->numberBetween(0, 100),
                'weight'                => 50,
                'mental_status'         => 'Conscious',
                'activities'            => 'Ambulant',
                'diet'                  => 'DAT',
                'tubes'                 => 'None',
                'special_info'          => 'None',
                'status'                => 'Discharged',
                'created_at'            => '2022-11-25 09:30:25',
                'datetime_discharged'   => '2022-11-25 01:30:25',
    
            ]);
        }
        
    }
}
