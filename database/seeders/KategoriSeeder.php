<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'A001', 'kategori_nama'=> 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'B002', 'kategori_nama'=> 'Fashion'],
            ['kategori_id' => 3, 'kategori_kode' => 'C003', 'kategori_nama'=> 'Makanan'],
            ['kategori_id' => 4, 'kategori_kode' => 'D004', 'kategori_nama'=> 'Buku'],
            ['kategori_id' => 5, 'kategori_kode' => 'E005', 'kategori_nama'=> 'Olahraga']
        ];
        DB::table('m_kategori')->insert($data);
    }
}