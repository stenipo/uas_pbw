<?php

use Illuminate\Database\Seeder;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konten')->insert([
            'about' => 'Selamat datang di sistem RS UKDW, pada sistem ini pengguna dapat melihat data dari Pasien, Dokter, dan Ruangan yang ada di RS UKDW. Dukung kami dalam membangun sistem ini, Terima Kasih.',
            'telepon' => '082242129483',
            'email' => 'admin@fti.ukdw.ac.id',
            'fax' => '0088-8392',
            'alamat' => 'Jl. dr. Wahidin Sudirohusodo no. 5-25, Yogyakarta, Indonesia – 55224'
        ]);
    }
}
