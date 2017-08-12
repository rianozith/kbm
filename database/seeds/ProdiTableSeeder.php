<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('prodis')->insert([
            'nama_prodi' => 'Caberawit',

        ]);

        DB::table('prodis')->insert([
            'nama_prodi' => 'PraRemaja',

        ]);

        DB::table('prodis')->insert([
            'nama_prodi' => 'Remaja',

        ]);
    $this->command->info('berhasil menambahkan prodi');
    }
}
