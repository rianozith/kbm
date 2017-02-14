<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GuruTableSeeder::class);
        $this->call(KegiatanTableSeeder::class);
        $this->call(MuridTableSeeder::class);
    }
}
