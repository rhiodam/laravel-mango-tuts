<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//         $this->call(PenggunaSeeder::class);
         $this->call(TagSeeder::class);
         $this->call(TeleponSeeder::class);
         $this->call(ArtikelSeeder::class);
         $this->call(PegawaiSeeder::class);
         $this->call(SiswaSeeder::class);
    }
}
