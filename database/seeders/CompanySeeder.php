<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000000; $i++) {
            DB::table('companies')->insert([
                'company_name' => Str::random(10),
                'company_web' => Str::random(5) . '@gmail.com',
                'company_address' => Str::random(55),
                'company_code' => Str::random(55),
                'company_phone' => random_int(900000000, 999999999)
            ]);
        }
    }
}
