<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_toko = [
            'Penjahit A&A',
            'Penjahit Bayu',
            'Penjahit Amellia',
            'Penjahit Amalia',
            'Penjahit Mitra',
            'Penjahit Frizda',
            'Penjahit Abdi',
            'Penjahit Berkah',
            'Rumah Jahit & Seragam',
            'Penjahit Kani',
            // 'Penjahit 99',
            // 'Penjahit Naura',
            // 'Sari Wayati Penjahit',
            // 'Jahitan',
            // 'Arsyl Penjahit/Bordir',
            // 'Penjahit Sekumpul',
            // 'Penjahit Ningtyas',
            // 'Penjahit Kita',
            // 'Penjahit',
            // 'Penjahit Aidela',
            // 'Penjahit Endang',
            // 'Penjahit Weci',
            // 'Penjahit Rahmah',
            // 'Penjahit Hafidz',
        ];

        foreach($nama_toko as $nama){
            Layanan::create([
                'nama_toko' => $nama,
                'jahit_id' => mt_rand(1,10),
                'konveksi_id' => mt_rand(1,10),
            ]);
        }
    }
}
