<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'S001', 'supplier_nama' => 'PT Sumber Makmur', 'supplier_alamat' => 'Jl. Merdeka No. 10, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'S002', 'supplier_nama' => 'CV Elektronik Jaya', 'supplier_alamat' => 'Jl. Pahlawan No. 23, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'S003', 'supplier_nama' => 'UD Maju Terus', 'supplier_alamat' => 'Jl. Cendana No. 45, Surabaya']
        ];
        DB::table('m_supplier')->insert($data);
    }
}