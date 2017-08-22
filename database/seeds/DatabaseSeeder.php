<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(GuruTableSeeder::class);
        // $this->call(KegiatanTableSeeder::class);
        // $this->call(MuridTableSeeder::class);
        // $this->call(KelasTableSeeder::class);
        // $this->call(ProdiTableSeeder::class);
        // $this->call(RuanganTableSeeder::class);
        // $this->call(KelompokTableSeeder::class);
        $this->call(SambungTableSeeder::class);
        $this->call(StudyprogramTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(StudentdetailTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(TeacherdetailTableSeeder::class);
    }
}
