<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SambungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $sambung = ['Perum 1A', 'Perum 1B', 'Perum 2', 'Perum 3', 'Palem Semi'];

        foreach ($sambung as $index){
	        DB::insert('insert into sambungs (sambung_name, info) values (:sambung_name, :info)', [
	        	'sambung_name' => $index,
	        	'info' => $faker->sentence($nbWords = 3, $variableNbWords = true),
	        	]);
        	
        }
        $this->command->info('berhasil menambahkan sambung');
    }
}
