<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++){
            DB::table('dokter')->insert([
                'no_dokter' => $faker->numberBetween(2300000,2399999),
                'nama_dokter' => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-Laki','Perempuan')),
                'layanan' => $faker->randomElement($array = array('Operasi','Rawat Inap','Rawat Jalan','Control')),
                'spesialis' => $faker->randomElement($array = array('Anak','Penyakit Dalam','Kanker','Mata','Gigi','Kebidanan dan Kandungan','Tulang','Jantung dan Pembuluh Darah'))
            ]);   
        }
    }
}
