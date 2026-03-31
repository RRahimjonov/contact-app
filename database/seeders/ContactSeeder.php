<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Contact;
use App\Models\Company;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::all('id');
        $faker = Faker::create();
        $contacts  = [];
        foreach ($companies as $company){
            foreach(range(1, mt_rand(6, 10)) as $index){
                $contact = [
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'phone' => $faker->phoneNumber(),
                    'email' => $faker->email(),
                    'address' => $faker->address(),
                    'company_id' => $company->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
                $contacts [] = $contact;
            }
        }
        Contact::insert($contacts);



    }
}
