<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Barang untuk Kategori Elektronik (Kategori ID 1)
            ['barang_id' => 101, 'fk_kategori_id' => 1, 'barang_kode' => 'ELE001', 'barang_nama' => 'Laptop Dell Inspiron', 'harga_beli' => 8000000, 'harga_jual' => 8500000],
            ['barang_id' => 102, 'fk_kategori_id' => 1, 'barang_kode' => 'ELE002', 'barang_nama' => 'Headphone Sony WH-1000XM4', 'harga_beli' => 3500000, 'harga_jual' => 4000000],
            ['barang_id' => 103, 'fk_kategori_id' => 1, 'barang_kode' => 'ELE003', 'barang_nama' => 'Smartphone Samsung Galaxy S21', 'harga_beli' => 10000000, 'harga_jual' => 11000000],
            ['barang_id' => 104, 'fk_kategori_id' => 1, 'barang_kode' => 'ELE004', 'barang_nama' => 'Smartwatch Apple Watch Series 7', 'harga_beli' => 6000000, 'harga_jual' => 6500000],
            ['barang_id' => 105, 'fk_kategori_id' => 1, 'barang_kode' => 'ELE005', 'barang_nama' => 'Tablet iPad Pro', 'harga_beli' => 12000000, 'harga_jual' => 12500000],

            // Barang untuk Kategori Fashion (Kategori ID 2)
            ['barang_id' => 106, 'fk_kategori_id' => 2, 'barang_kode' => 'FAS001', 'barang_nama' => 'Jaket Kulit Pria', 'harga_beli' => 750000, 'harga_jual' => 900000],
            ['barang_id' => 107, 'fk_kategori_id' => 2, 'barang_kode' => 'FAS002', 'barang_nama' => 'Sepatu Sneakers Wanita', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['barang_id' => 108, 'fk_kategori_id' => 2, 'barang_kode' => 'FAS003', 'barang_nama' => 'Tas Ransel Kulit', 'harga_beli' => 400000, 'harga_jual' => 550000],
            ['barang_id' => 109, 'fk_kategori_id' => 2, 'barang_kode' => 'FAS004', 'barang_nama' => 'Celana Chino Pria', 'harga_beli' => 250000, 'harga_jual' => 350000],
            ['barang_id' => 110, 'fk_kategori_id' => 2, 'barang_kode' => 'FAS005', 'barang_nama' => 'Kemeja Flanel Wanita', 'harga_beli' => 200000, 'harga_jual' => 300000],

            // Barang untuk Kategori Makanan (Kategori ID 3)
            ['barang_id' => 111, 'fk_kategori_id' => 3, 'barang_kode' => 'FOOD001', 'barang_nama' => 'Biskuit Gandum', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['barang_id' => 112, 'fk_kategori_id' => 3, 'barang_kode' => 'FOOD002', 'barang_nama' => 'Keripik Singkong Pedas', 'harga_beli' => 20000, 'harga_jual' => 30000],
            ['barang_id' => 113, 'fk_kategori_id' => 3, 'barang_kode' => 'FOOD003', 'barang_nama' => 'Coklat Batang', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 114, 'fk_kategori_id' => 3, 'barang_kode' => 'FOOD004', 'barang_nama' => 'Minuman Teh Botol', 'harga_beli' => 5000, 'harga_jual' => 10000],
            ['barang_id' => 115, 'fk_kategori_id' => 3, 'barang_kode' => 'FOOD005', 'barang_nama' => 'Kacang Goreng', 'harga_beli' => 10000, 'harga_jual' => 20000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
