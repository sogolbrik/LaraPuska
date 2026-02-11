<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judul = [
            'Laravel untuk Pemula',
            'Belajar PHP Modern',
            'Algoritma dan Struktur Data',
            'Sejarah Dunia Modern',
            'Dasar Dasar Bisnis',
            'Motivasi Sukses Muda',
            'Sains untuk Semua',
            'Petualangan Nusantara',
            'Belajar Web Development',
            'Manajemen Waktu Efektif',
            'Biografi Tokoh Dunia',
            'Komik Petualang Cilik',
            'Teknologi Masa Depan',
            'Rahasia Startup Sukses',
            'Pemrograman Berorientasi Objek',
            'Pendidikan Karakter',
            'Sains dan Kehidupan',
            'Novel Senja di Kota',
            'Agama dan Kehidupan Modern',
            'Belajar Database dari Nol'
        ];

        $kategori = Kategori::pluck('id')->toArray();
        $faker = Factory::create('id_ID');

        foreach ($judul as $item) {
            Buku::create([
                'kategori_id' => $kategori[array_rand($kategori)],
                'judul' => $item,
                'penulis' => $faker->name(),
                'penerbit' => $faker->company(),
                'tahun_terbit' => rand(2015, 2024),
                'deskripsi' => $faker->sentence(10),
                'cover' => 'covers/default-book.jpg',
                'stok' => rand(1, 10),
                'status' => collect(['tersedia', 'habis', 'nonaktif'])->random(),
            ]);
        }
    }
}
