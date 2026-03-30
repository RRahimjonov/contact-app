<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $contacts = [];

        foreach (range(1, 10) as $index){
            $contact = [
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'address' => $faker->address(),
                'company_id' => $faker->numberBetween(21, 30)
            ];
            $contacts [] = $contact;
        }

        Contact::insert($contacts);

    }
}
