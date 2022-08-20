<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit A&A',
            'no_hp' => '085349972239',
            'x' => '-0.477457',
            'y' => '117.187378'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Bayu',
            'alamat' => 'Jl Gerilya',
            'x' => '-0.482318',
            'y' => '117.180117'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Amellia',
            'x' => '-0.481277',
            'y' => '117.177672'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Amalia',
            'no_hp' => '081347825689',
            'x' => '-0.474577',
            'y' => '11.180873'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Mitra',
            'x' => '-0.463867',
            'y' => '117.189154'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Rizda',
            'alamat' => 'Jl Mugirejo',
            'no_hp' => '085248575070',
            'x' => '-0.462285',
            'y' => '117.186545'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Abdi',
            'alamat' => 'Jl.Wahid Hasyim 2',
            'x' => '-0.449048',
            'y' => '117.15379'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Berkah',
            'no_hp' => '081253806734',
            'x' => '-0.446557',
            'y' => '117.155167'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Rumah Jahit & Seragam',
            'alamat' => 'Jl.Padat Karya,Sempaja',
            'x' => '-0.435125',
            'y' => '117.155323'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Kani',
            'no_hp' => '082153004521',
            'x' => '-0.431845',
            'y' => '117.156457'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit 99',
            'x' => '-0.429278',
            'y' => '117.160062'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Naura',
            'x' => '-0.440293',
            'y' => '117.153397'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Sari Wayati Penjahit',
            'alamat' => '',
            'no_hp' => '',
            'x' => '-0.562815',
            'y' => '117.146229'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Jahitan',
            'x' => '-0.55038',
            'y' => '117.155345'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Arsyil Penjahit/Bordir',
            'alamat' => 'Jl.Sultan Hasanudin',
            'x' => '-0.511282',
            'y' => '117.139773'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Sekumpul',
            'x' => '-0.515253',
            'y' => '117.127367'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Ningtyas',
            'x' => '-0.515515',
            'y' => '117.126282'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Kita',
            'x' => '-0.5431113',
            'y' => '117.090255'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit',
            'no_hp' => '085247275193',
            'x' => '-0.557316',
            'y' => '117.1086428'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Aidela',
            'x' => '-0.572812',
            'y' => '117.087185'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bu Endang Terima Jahitan',
            'alamat' => 'Jl.Sukarno Hata',
            'x' => '-0.5768',
            'y' => '117.092025'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Weci',
            'x' => '-0.577943',
            'y' => '117.094225'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Rahmah',
            'no_hp' => '085246885488',
            'x' => '-0.585844',
            'y' => '117.097161'
        ]);

        Toko::create([
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Penjahit Hafidz',
            'alamat' => 'Jl.Cendana',
            'no_hp' => '085250690020',
            'x' => '-0.496972',
            'y' => '117.121631'
        ]);
    }
}
