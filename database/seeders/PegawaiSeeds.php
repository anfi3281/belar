<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<=100; $i++){
            $data = Faker::create('id_ID');
            DB::table('pegawai')->insert([
                'nama' => $data->name(),
                'alamat' => $data->address(),
                'pekerjaan' => $data->jobTitle()
            ]);
      }
    }
}
