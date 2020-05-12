<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 25; $i++) {
            DB::table('pengguna')->insert([
                'nama' => $faker->name,
                'no_tlp' => $faker->phoneNumber,
                'alamat' => $faker->address
            ]);
        }
    }
}
