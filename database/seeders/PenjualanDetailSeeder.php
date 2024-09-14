<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Detail untuk Penjualan 1
            ['detail_id' => 1, 'fk_penjualan_id' => 1, 'fk_barang_id' => 101, 'harga' => 8500000, 'jumlah' => 2],
            ['detail_id' => 2, 'fk_penjualan_id' => 1, 'fk_barang_id' => 102, 'harga' => 4000000, 'jumlah' => 1],
            ['detail_id' => 3, 'fk_penjualan_id' => 1, 'fk_barang_id' => 103, 'harga' => 11000000, 'jumlah' => 1],

            // Detail untuk Penjualan 2
            ['detail_id' => 4, 'fk_penjualan_id' => 2, 'fk_barang_id' => 106, 'harga' => 900000, 'jumlah' => 1],
            ['detail_id' => 5, 'fk_penjualan_id' => 2, 'fk_barang_id' => 107, 'harga' => 600000, 'jumlah' => 2],
            ['detail_id' => 6, 'fk_penjualan_id' => 2, 'fk_barang_id' => 108, 'harga' => 350000, 'jumlah' => 3],

            // Detail untuk Penjualan 3
            ['detail_id' => 7, 'fk_penjualan_id' => 3, 'fk_barang_id' => 111, 'harga' => 25000, 'jumlah' => 5],
            ['detail_id' => 8, 'fk_penjualan_id' => 3, 'fk_barang_id' => 112, 'harga' => 30000, 'jumlah' => 4],
            ['detail_id' => 9, 'fk_penjualan_id' => 3, 'fk_barang_id' => 113, 'harga' => 35000, 'jumlah' => 2],

            // Detail untuk Penjualan 4
            ['detail_id' => 10, 'fk_penjualan_id' => 4, 'fk_barang_id' => 104, 'harga' => 6500000, 'jumlah' => 1],
            ['detail_id' => 11, 'fk_penjualan_id' => 4, 'fk_barang_id' => 105, 'harga' => 12500000, 'jumlah' => 1],
            ['detail_id' => 12, 'fk_penjualan_id' => 4, 'fk_barang_id' => 106, 'harga' => 900000, 'jumlah' => 2],

            // Detail untuk Penjualan 5
            ['detail_id' => 13, 'fk_penjualan_id' => 5, 'fk_barang_id' => 107, 'harga' => 600000, 'jumlah' => 1],
            ['detail_id' => 14, 'fk_penjualan_id' => 5, 'fk_barang_id' => 108, 'harga' => 350000, 'jumlah' => 2],
            ['detail_id' => 15, 'fk_penjualan_id' => 5, 'fk_barang_id' => 109, 'harga' => 350000, 'jumlah' => 1],

            // Detail untuk Penjualan 6
            ['detail_id' => 16, 'fk_penjualan_id' => 6, 'fk_barang_id' => 110, 'harga' => 300000, 'jumlah' => 3],
            ['detail_id' => 17, 'fk_penjualan_id' => 6, 'fk_barang_id' => 111, 'harga' => 25000, 'jumlah' => 2],
            ['detail_id' => 18, 'fk_penjualan_id' => 6, 'fk_barang_id' => 112, 'harga' => 30000, 'jumlah' => 1],

            // Detail untuk Penjualan 7
            ['detail_id' => 19, 'fk_penjualan_id' => 7, 'fk_barang_id' => 113, 'harga' => 35000, 'jumlah' => 1],
            ['detail_id' => 20, 'fk_penjualan_id' => 7, 'fk_barang_id' => 114, 'harga' => 10000, 'jumlah' => 4],
            ['detail_id' => 21, 'fk_penjualan_id' => 7, 'fk_barang_id' => 115, 'harga' => 20000, 'jumlah' => 2],

            // Detail untuk Penjualan 8
            ['detail_id' => 22, 'fk_penjualan_id' => 8, 'fk_barang_id' => 101, 'harga' => 8500000, 'jumlah' => 1],
            ['detail_id' => 23, 'fk_penjualan_id' => 8, 'fk_barang_id' => 102, 'harga' => 4000000, 'jumlah' => 2],
            ['detail_id' => 24, 'fk_penjualan_id' => 8, 'fk_barang_id' => 103, 'harga' => 11000000, 'jumlah' => 1],

            // Detail untuk Penjualan 9
            ['detail_id' => 25, 'fk_penjualan_id' => 9, 'fk_barang_id' => 106, 'harga' => 900000, 'jumlah' => 2],
            ['detail_id' => 26, 'fk_penjualan_id' => 9, 'fk_barang_id' => 107, 'harga' => 600000, 'jumlah' => 1],
            ['detail_id' => 27, 'fk_penjualan_id' => 9, 'fk_barang_id' => 108, 'harga' => 350000, 'jumlah' => 2],

            // Detail untuk Penjualan 10
            ['detail_id' => 28, 'fk_penjualan_id' => 10, 'fk_barang_id' => 109, 'harga' => 350000, 'jumlah' => 1],
            ['detail_id' => 29, 'fk_penjualan_id' => 10, 'fk_barang_id' => 110, 'harga' => 300000, 'jumlah' => 2],
            ['detail_id' => 30, 'fk_penjualan_id' => 10, 'fk_barang_id' => 111, 'harga' => 25000, 'jumlah' => 3],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
