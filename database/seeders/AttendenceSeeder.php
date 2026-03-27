<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attendences')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
            'date_of_born' => Date::make('date_of-birth'),
            'sex' => Str::make('sex'),
            'phone' => Str::make('phone'),
            'place_of_born' => Str::make('place_of_born'),
            'experience' => Str::make('experience'),
                        
        ]);
    }
}
