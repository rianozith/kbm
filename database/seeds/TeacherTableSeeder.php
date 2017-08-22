<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $teacherdetail = [1,2,3,4,5];
        foreach ($teacherdetail as $index){
        	DB::insert('insert into teachers (name, teacherdetail_id, created_at) values (:name, :teacherdetail_id, :created_at) ',[
        		'name' => $faker->name(),
        		'teacherdetail_id' => $index,
        		'created_at' => date("Y-m-d H:i:s")
        		]);
        }
        $this->command->info('berhasil menambahkan teachers');
    }
}
