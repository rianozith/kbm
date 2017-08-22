<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentdetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $detail = range(1,10);
        foreach($detail as $index){
        	DB::insert('insert into student_details (id, age, address, pob, dob, sambung_id, hobby, blood_type, phone, father, mother, brothers, created_at) values (:id, :age, :address, :pob, :dob, :sambung_id, :hobby, :blood_type, :phone, :father, :mother, :brothers, :created_at)', [
        		'id' => $index,
				'age' => $faker-> numberBetween(7,20),
				'address' => $faker-> address(),
				'pob' => $faker-> city(),
				'dob' => date("Y-m-d H:i:s"),//$faker-> $faker->cnp($dateOfBirth = Y-m-d)
				'sambung_id' => $faker-> numberBetween(1,5),
				'hobby' => $faker-> sentence($nbWords = 2, $variableNbWords = true),
				'blood_type' => $faker-> randomElement($array = array ('A','B','AB','O')),
				'phone' => $faker-> phoneNumber(),
				'father' => $faker-> name($gender = 'male'),
				'mother' => $faker-> name($gender = 'female'),
				'brothers' => $faker-> numberBetween(0,5),
				'created_at' => date("Y-m-d H:i:s"),
        		]);
        }
        $this->command->info('berhasil menambahkan student_detail');
    }
}
