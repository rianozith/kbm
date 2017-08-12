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
		DB::insert('insert into murids (nama_murid, umur_murid, gender, alamat_murid, nohp_murid, kelas_id)values (:nama_murid, :umur_murid, :gender, :alamat_murid, :nohp_murid, :kelas_id )', [
		'nama_murid' => $faker->name, 
		'umur_murid' => $faker->biasedNumberBetween($min = 7, $max = 12, $function = 'sqrt'), 
		'gender'	=> $faker->randomElement($array = array ('L','P')),
		'alamat_murid' => $faker->address, 
		'nohp_murid' => $faker->phoneNumber, 
		'kelas_id' => $faker->numberBetween($min = 1, $max = 3),		
		]);
		}
		$this->command->info('Berhasil menambah '.$index.' murid');
    }
}
