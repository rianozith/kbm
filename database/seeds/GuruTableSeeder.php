<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
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
        DB::insert('insert into gurus (nama_guru, nohp_guru) values (:nama_guru, :nohp_guru)', [
        'nama_guru' => $faker->name,
        'nohp_guru' => $faker->phoneNumber
        ]);
        }
        $this->command->info('Berhasil menambah guru');
    }
}
