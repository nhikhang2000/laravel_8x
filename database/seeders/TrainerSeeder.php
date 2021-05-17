<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000000; $i++) {
            DB::table('trainers')->insert([
                'trainer_name' => Str::random(10),
                'company_id' => random_int(1, 999999),
                'trainer_email' => Str::random(5) . '@gmail.com',
                'trainer_phone' => random_int(900000000, 999999999)
            ]);
        }
    }
}
