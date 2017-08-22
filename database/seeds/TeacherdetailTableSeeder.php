<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherdetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $teachdetail = [1,2,3,4,5];
        foreach ($teachdetail as $index){
        	DB::insert('insert into teacher_details (id, age, address, sambung_id, phone, status, created_at) values (:id, :age, :address, :sambung_id, :phone, :status, :created_at)', [
				'id' => $index,
				'age' => $faker->numberBetween(20,45),
				'address' => $faker->address(),
				'sambung_id' => $faker->numberBetween(1,5),
				'phone' => $faker->phoneNumber(),
				'status' => $faker->randomElement($array = array ('MT','MS')),
				'created_at' => date("Y-m=d H:i:s")
        		]);
        }
        $this->command->info('berhasil menambahkan teacher details');
    }
}
