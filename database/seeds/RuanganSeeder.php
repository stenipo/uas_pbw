<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RuanganSeeder extends Seeder
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
            DB::table('ruangan')->insert([
                'no_ruangan' => $faker->numberBetween(1,100),
                'nama_ruangan' => $faker->randomElement($array = array('Mawar','Anggrek','Melati','Kamboja')),
                'keterangan' => $faker->randomElement($array = array('Tersedia','Tidak Tersedia'))
            ]);   
        }
    }
}
