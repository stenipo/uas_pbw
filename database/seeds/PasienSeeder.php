<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
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
            DB::table('pasien')->insert([
                'no_pasien' => $faker->numberBetween(1800000,1899999),
                'nama_pasien' => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-Laki','Perempuan')),
                'keluhan' => $faker->randomElement($array = array('Demam','Batuk','Muntah-muntah','Pusing')),
                'jenis_rawat' => $faker->randomElement($array = array('Rawat Inap','Rawat Jalan'))
            ]);   
        }
    }
}
