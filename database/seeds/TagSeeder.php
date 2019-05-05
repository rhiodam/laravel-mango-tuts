<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 1000; $x++){

            // insert data dummy pegawai dengan faker
            DB::table('tag')->insert([
                'tag' => $faker->word,
//                'artikel_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
                'artikel_id' => $faker->numberBetween($min = 1, $max = 100),
            ]);

        }
    }
}
