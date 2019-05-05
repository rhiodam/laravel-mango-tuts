<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
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
        for($x = 1; $x <= 100; $x++){

            // insert data dummy pegawai dengan faker
            DB::table('artikel')->insert([
                'judul' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);

        }
    }

}
