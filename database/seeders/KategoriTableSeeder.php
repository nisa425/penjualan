<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kategori::create([
            'nama' => 'Makanan'
        ]);

        Kategori::create([
            'nama' => 'Perlengkapan Rumah Tangga'
        ]);

        Kategori::create([
            'nama' => 'Alat Belajar'
        ]);
    }
}
