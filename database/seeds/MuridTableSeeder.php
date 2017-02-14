<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MuridTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create();
		foreach ( range(1,10) as $index ) {
		DB::insert('insert into murids (nama_murid, umur_murid, alamat_murid, nohp_murid, kelas_murid, kegiatan_id) 

			values (:nama_murid, :umur_murid, :alamat_murid, :nohp_murid, :kelas_murid, :kegiatan_id)', [

		'nama_murid' => $faker->name, 
		'umur_murid' => $faker->biasedNumberBetween($min = 7, $max = 12, $function = 'sqrt'), 
		'alamat_murid' => $faker->address, 
		'nohp_murid' => $faker->phoneNumber, 
		'kelas_murid' => $faker->randomElement($array = array ('a','b','c')),
		'kegiatan_id' => $faker->numberBetween($min = 1, $max = 5)
		
		]);
		}
		$this->command->info('Berhasil menambah murid');
    }
}
