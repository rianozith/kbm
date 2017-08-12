<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KelompokTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz A',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz B',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz C',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz D',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz E',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz F',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz G',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Tahfidz Plus',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'GP Reguler',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'GP Intensif',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Remaja',
        	'keterangan' => '',
        ]);

        DB::table('kelompoks')->insert([
        	'nama_kelompok' => 'Senior',
        	'keterangan' => '',
        ]);
    $this->command->info('berhasil menambahkan kelompok');
    }
}
