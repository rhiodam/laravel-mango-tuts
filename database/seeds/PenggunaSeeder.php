<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

        for ($i = 1; $i <= 5000; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('customers')->insert([
//                'firstname' => $faker->firstName($gender = null|'male'|'female'),
                'CustomerName' => $faker->firstName($gender) . ' ' . $faker->lastName($gender),
//                'lastname' => $faker->lastName($gender),
//                'gender' => $gender,
//                'name' => $faker->name($gender),
//                'pegawai_jabatan' => $faker->jobTitle,
//                'phone' => $faker->phoneNumber,
//                'email' => $faker->email,
//                'age' => $faker->numberBetween(25,40),
                'City' => $faker->city,
                'Address' => $faker->address,
                'PostalCode' => $faker->postcode,
                'Country' => $faker->country,
//                'created_at' => $faker->dateTime($max = 'now', $timezone = null)
//                'created_at' => $faker->iso8601($max = 'now')
//                'created_at' => now()
//                'updated_at' => $faker->dateTime($max = 'now', $timezone = null) ,

            ]);
        }
    }
}
