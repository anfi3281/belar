<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Faker::create('id_ID');
        for($i=1;$i<=100;$i++){
        DB::table('buku')->insert([
            'judul' => $data->title,
            'penerbit' => $data->address,
            'pengarang' => $data->userName
        ]);
    }
    }
}
