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
		DB::insert('insert into murids (nama_murid, umur_murid, alamat_murid, nohp_murid, kelas_murid, id_kelas_generus, id_kehadiran_murid, id_acara_generus) 

			values (:nama_murid, :umur_murid, :alamat_murid, :nohp_murid, :kelas_murid, :id_kelas_generus, :id_kehadiran_murid, :id_acara_generus)', [

		'nama_murid' => $faker->name, 
		'umur_murid' => $faker->biasedNumberBetween($min = 7, $max = 12, $function = 'sqrt'), 
		'alamat_murid' => $faker->address, 
		'nohp_murid' => $faker->phoneNumber, 
		'kelas_murid' => $faker->word,
		'id_kelas_generus' => 1, 
		'id_kehadiran_murid' => 1, 
		'id_acara_generus' => 1
		
		]);
		}
		$this->command->info('Berhasil menambah murid');
    }
}
