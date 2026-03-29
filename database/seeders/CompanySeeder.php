<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [];

        foreach( range(1, 10) as $index){
            $company = [
                'name' => $name = "Company $index",
                'website' => "company{$name}.com",
                'address' => "Company $index street",
                'email' => "company{$index}@gmail.com",
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $companies [] = $company;
        }

        DB::table('companies')->insert($companies);
    }
}
