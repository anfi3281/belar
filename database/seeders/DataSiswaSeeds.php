<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DataSiswaSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Faker::create('id_ID');
        for($i=1; $i <=100; $i++){
            DB::table('database_datasiswa')->insert([
                'nim' => $data->randomNumber(6, 1),
                'nama' => $data->name(),
                'alamat' => $data->address()
            ]);
        }
        // DB::table('database_datasiswa')->delete();
    }
}
