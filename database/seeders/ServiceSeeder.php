<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('services')
            ->insert([
                ['name' => 'Car Alarm Installation', 'price' => 15000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Sound Set Up', 'price' => 12000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 8000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Tinting', 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Check Ups', 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Alarm Malfunction Rescue', 'price' => 7000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Head Light Installations', 'price' => 9000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Stereo Installation', 'price' => 11000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 8000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Alarm Installation', 'price' => 1232134, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Sound Set Up', 'price' => 123, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 8000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Tinting', 'price' => 3, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Check Ups', 'price' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Alarm Malfunction Rescue', 'price' => 12, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Head Light Installations', 'price' => 9000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Stereo Installation', 'price' => 11000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 123213, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Alarm Installation', 'price' => 15000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Sound Set Up', 'price' => 12000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 12345123, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Tinting', 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Check Ups', 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Alarm Malfunction Rescue', 'price' => 7000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Head Light Installations', 'price' => 9000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Car Stereo Installation', 'price' => 11000, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Troubleshoot Sound System', 'price' => 8000, 'created_at' => now(), 'updated_at' => now()]
            ]);
    }
}
 