<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++){
        $faker = Faker::create('id_ID');
        DB::table('pengunjung')->insert([
            'nama' => $faker->userName,
            'alamat' => $faker->address,
            'pekerjaan' => $faker->jobTitle(),
        ]);
    }
    }
}
