<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            'Teknologi',
            'Novel',
            'Sejarah',
            'Pendidikan',
            'Sains',
            'Bisnis',
            'Motivasi',
            'Agama',
            'Biografi',
            'Komik'
        ];

        foreach ($kategori as $item) {
            Kategori::create([
                'nama' => $item,
                'slug' => Str::slug($item),
                'deskripsi' => "Kategori buku tentang {$item}"
            ]);
        }
    }
}
