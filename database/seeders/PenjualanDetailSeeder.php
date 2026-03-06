<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detailId = 1;

        // Loop untuk 10 transaksi (sesuai jumlah di PenjualanSeeder)
        for ($i = 1; $i <= 10; $i++) {
            // Setiap transaksi memiliki 3 barang
            for ($j = 0; $j < 3; $j++) {
                // Ambil barang_id secara acak dari 1 sampai 15
                $barangId = rand(1, 15);
                
                // Harga diset statis atau acak (sebaiknya sesuai harga barang, tapi untuk dummy bisa acak)
                $harga = rand(10000, 50000); 

                $data[] = [
                    'detail_id' => $detailId,
                    'penjualan_id' => $i,
                    'barang_id' => $barangId,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5), // Jumlah barang yang dibeli (acak 1-5)
                ];
                $detailId++;
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}