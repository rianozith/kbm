<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('kelas')->insert([
			'nama_kelas'			=> 'Tahfidz',
			'prodi_id'	 		=> 1,
			'kapasitas'	=> 5,
						
		]);

        DB::table('kelas')->insert([
			'nama_kelas'			=> 'Generus',
			'prodi_id'	 		=> 2,
			'kapasitas'	=> 5,
						
		]);

        DB::table('kelas')->insert([
			'nama_kelas'			=> 'Muda - mudi',
			'prodi_id'	 		=> 3,
			'kapasitas'	=> 5,
						
		]);

        DB::table('kelas')->insert([
			'nama_kelas'			=> 'Unik',
			'prodi_id'	 		=> 3,
			'kapasitas'	=> 5,
						
		]);


        $this->command->info('berhasil menambah 8 kelas');
    }
}
