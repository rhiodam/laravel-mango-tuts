<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        ADMIN
        DB::table('users')->insert([
            'name' => 'admin',
            'role' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => 'admin@gmail.com',
            'status' => 1,
        ]);

//        AGENT
        DB::table('users')->insert([
            'name' => 'agent',
            'role' => 'agent',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => 'agent@gmail.com',
            'status' => 1,
        ]);

//        Customer
        DB::table('users')->insert([
            'name' => 'customer',
            'role' => 'customer',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => 'customer@gmail.com',
            'status' => 1,
        ]);


//        Customer
//        DB::table('users')->insert([
//            'name' => 'customer',
//            'role' => 'customer',
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'email' => 'customer@gmail.com',
//            'status' => 1,
//        ]);

        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for ($x = 1; $x <= 1000; $x++) {

            $gender = $faker->randomElement(['male','female']);
            // insert data dummy pegawai dengan faker
            DB::table('users')->insert([
//                'nis' => $faker->unique()->numberBetween($min = 1000, $max = 3000), // 8567
//                'address' => $faker->address,
                'name' => $faker->name($gender),
                'role' => 'customer',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'email' => $faker->unique()->email,
                'status' => 1,
                'gender' => $gender,
            ]);

        }


    }
}
