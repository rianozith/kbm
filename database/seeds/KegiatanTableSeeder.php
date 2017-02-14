<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class KegiatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach ( range(1,5) as $index ) {
        DB::insert('insert into kegiatans (nama_kegiatan, tanggal_kegiatan, jam_kegiatan, tempat_kegiatan, guru_id) values (:nama_kegiatan, :tanggal_kegiatan, :jam_kegiatan, :tempat_kegiatan, :guru_id)', [
        'nama_kegiatan' => $faker->lastName,
        'tanggal_kegiatan' => $faker ->dateTimeBetween($startDate = 'now', $endDate = '+7 days'), 
        'jam_kegiatan' => $faker->time($format = 'H:i:s', $max = 'now'), 
        'tempat_kegiatan' => $faker->city,
        'guru_id' => $faker->numberBetween($min=1, $max=5)
        ]);
        }
        $this->command->info('Berhasil menambah kegiatan');
    }
}
