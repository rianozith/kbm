<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $subjects = ['Tahfidz', 'AlQuran', 'AlHadits'];
        foreach ($subjects as $index){
        	DB::insert('insert into subjects (subjects_name, info) values (:subjects_name, :info)',[
				'subjects_name' => $index, 
				'info' => $faker->sentence($nbWords=3, $variableNbWords = true)
        		]);
        }
        $this->command->info('berhasil menambahkan subjects');
    }
}
