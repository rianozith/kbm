<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // DB::table('ruangans')->insert([
        // 	'lokasi_ruangan' => 'Masjid Atas'
        // ]);

        // DB::table('ruangans')->insert([
        // 	'lokasi_ruangan' => 'Masjid Bawah'
        // ]);

        // DB::table('ruangans')->insert([
        // 	'lokasi_ruangan' => 'Ruang Paud'
        // ]);

        $ruangan = ['masjid atas', 'masjid bawah', 'paud'];
        foreach ($ruangan as $index){
            DB::insert('insert into ruangans (lokasi_ruangan) values (:lokasi_ruangan)',[
                'lokasi_ruangan' => $index,
                ]);
        }
    $this->command->info('berhasil menambahkan ruangan');
    }

}
