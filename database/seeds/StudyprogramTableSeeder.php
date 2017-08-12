<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudyprogramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $study = ['Caberawit', 'PraRemaja', 'Remaja'];
        foreach ($study as $index){
        	DB::insert('insert into study_programs (program_name, info) values (:program_name, :info)',[
        		'program_name' => $index, 
        		'info' => $faker->sentence($nbWords =3, $variableNbWords = true),
        		]);
        }
        $this->command->info('berhasil menambahkan study program');
    }
}
