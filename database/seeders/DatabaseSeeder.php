<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TokoSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JahitSeeder;
use Database\Seeders\LayananSeeder;
use Database\Seeders\KonveksiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            TokoSeeder::class,
            JahitSeeder::class,
            KonveksiSeeder::class,
            LayananSeeder::class,
        ]);
    }
}
