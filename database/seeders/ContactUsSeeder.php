<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<1000;$i++)
        {
            ContactUs::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'company' => $faker->company,
                'phone_number' => $faker->e164PhoneNumber,
                'message' => $faker->realText($maxNbChars = 200, $indexSize = 2)
            ]);
        }
    }
}
