<?php

namespace Database\Seeders;

use App\Models\Konveksi;
use Illuminate\Database\Seeder;

class KonveksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //24
        $nama = [
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
            'Penjahit 99',
            'Penjahit Naura',
            'Sari Wayati Penjahit',
            'Jahitan',
            'Arsyl Penjahit/Bordir',
            'Penjahit Sekumpul',
            'Penjahit Ningtyas',
            'Penjahit Kita',
            'Penjahit',
            'Penjahit Aidela',
            'Penjahit Endang',
            'Penjahit Weci',
            'Penjahit Rahmah',
            'Penjahit Hafidz',
        ];

        //5
        $ukuran = [
            'S',
            'M',
            'X',
            'XL',
            'XXL'
        ];

        //9
        $harga = [
            '10000',
            '15000',
            '20000',
            '25000',
            '30000',
            '35000',
            '40000',
            '45000',
            '50000'
        ];

        //3
        $cmt = [
            'Cut',
            'Make',
            'Trim'
        ];

        Konveksi::create([
            'nama_toko' => $nama[0],
            'harga' => $harga[0],
            'ukuran' => $ukuran[0],
            'jenis' => $cmt[0]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[1],
            'harga' => $harga[1],
            'ukuran' => $ukuran[1],
            'jenis' => $cmt[1]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[2],
            'harga' => $harga[2],
            'ukuran' => $ukuran[2],
            'jenis' => $cmt[2]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[3],
            'harga' => $harga[3],
            'ukuran' => $ukuran[3],
            'jenis' => $cmt[0]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[4],
            'harga' => $harga[4],
            'ukuran' => $ukuran[0],
            'jenis' => $cmt[1]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[5],
            'harga' => $harga[5],
            'ukuran' => $ukuran[1],
            'jenis' => $cmt[2]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[6],
            'harga' => $harga[6],
            'ukuran' => $ukuran[2],
            'jenis' => $cmt[0]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[7],
            'harga' => $harga[7],
            'ukuran' => $ukuran[3],
            'jenis' => $cmt[1]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[8],
            'harga' => $harga[8],
            'ukuran' => $ukuran[0],
            'jenis' => $cmt[2]
        ]);

        Konveksi::create([
            'nama_toko' => $nama[9],
            'harga' => $harga[0],
            'ukuran' => $ukuran[1],
            'jenis' => $cmt[0]
        ]);
    }
}
