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
        $this->call(MuridTableSeeder::class);
        $this->call(GuruTableSeeder::class);
    }
}
