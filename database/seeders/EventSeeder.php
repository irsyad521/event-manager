<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus data lama sebelum menambahkan data baru
        DB::table('events')->truncate();

        // Menambahkan data dummy
        DB::table('events')->insert([
            [
                'judul' => 'Konferensi Teknologi 2024',
                'deskripsi' => 'Sebuah konferensi teknologi dengan berbagai pembicara ternama dari industri teknologi.',
                'tanggal' => '2024-08-15',
                'lokasi' => 'Jakarta, Indonesia',
            ],
            [
                'judul' => 'Festival Musik Musim Panas',
                'deskripsi' => 'Festival musik dengan penampilan dari berbagai band dan artis terkenal.',
                'tanggal' => '2024-09-05',
                'lokasi' => 'Bali, Indonesia',
            ],
            [
                'judul' => 'Pameran Seni Rupa',
                'deskripsi' => 'Pameran seni rupa dengan karya dari seniman lokal dan internasional.',
                'tanggal' => '2024-10-20',
                'lokasi' => 'Yogyakarta, Indonesia',
            ],
            [
                'judul' => 'Pelatihan Pengembangan Diri',
                'deskripsi' => 'Pelatihan dan workshop untuk pengembangan diri dan keterampilan profesional.',
                'tanggal' => '2024-11-10',
                'lokasi' => 'Bandung, Indonesia',
            ],
            [
                'judul' => 'Turnamen Olahraga Antar Perguruan Tinggi',
                'deskripsi' => 'Turnamen olahraga yang melibatkan berbagai perguruan tinggi di seluruh Indonesia.',
                'tanggal' => '2024-12-01',
                'lokasi' => 'Surabaya, Indonesia',
            ],
        ]);
    }
}
