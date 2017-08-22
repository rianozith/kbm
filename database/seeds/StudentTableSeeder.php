<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $studentdetail = range(1,10);
        foreach ($studentdetail as $index){
        	DB::insert("insert into students (name, studentdetail_id, class_id, schedule_id, presence_id, study_program_id, created_at) values (:name, :studentdetail_id, :class_id, :schedule_id, :presence_id, :study_program_id, :created_at)",[
        		'name' => $faker->name(),
				'studentdetail_id' => $index,
				'class_id' => 0,
				'schedule_id' => 0,
				'presence_id' => 0,
				'study_program_id' => 0,
				'created_at' => date("Y-m-d H:i:s")]);
        }
        $this->command->info('berhasil menambahkan student');
    }
}
