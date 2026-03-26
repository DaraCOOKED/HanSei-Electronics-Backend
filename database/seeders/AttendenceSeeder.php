<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendence::create([
        'name' => 'Dalin',
        'status' => 'Present'
    ]);

    Attendence::create([
        'name' => 'John',
        'status' => 'Absent'
    ]);
    }
}
