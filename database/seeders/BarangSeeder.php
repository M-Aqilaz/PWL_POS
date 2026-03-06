<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Kategori 1: Makanan (id: 1)
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Selai Coklat',
                'harga_beli' => 15000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Susu Kotak',
                'harga_beli' => 5000,
                'harga_jual' => 6500,
            ],

            // Kategori 2: Minuman (id: 2)
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 4000,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kopi Kaleng',
                'harga_beli' => 6000,
                'harga_jual' => 8000,
            ],

            // Kategori 3: Kesehatan (id: 3)
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Masker Medis',
                'harga_beli' => 1000,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Hand Sanitizer',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Vitamin C',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],

            // Kategori 4: Elektronik (id: 4)
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Kabel USB',
                'harga_beli' => 20000,
                'harga_jual' => 35000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Power Bank',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Earphone',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],

            // Kategori 5: Pakaian (id: 5)
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Kemeja Batik',
                'harga_beli' => 80000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}