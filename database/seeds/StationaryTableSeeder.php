<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StationaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodtypes')->insert([
            [
                'nama' => 'Pulpen',
                'img' => 'Images/pulpen1'
            ],
            [
                'nama' => 'Buku Tulis',
                'img' => 'Images/buku1'
            ],
            [
                'nama' => 'Penggaris',
                'img' => 'Images/pulpen1'
            ],
        ]);

        DB::table('products')->insert([
            [
                'prodtypeId' => 1,
                'prodnama' => 'Pulpen 1 Lusin Full Color',
                'image' => 'Images/pulpen1',
                'desc' => 'Berisikan 1 lusin pulpen dengan 5 warna berbeda: merah,hijau,biru dan putih',
                'price' => 12000,
                'stock' => 20

            ],
            [
                'prodtypeId' => 1,
                'prodnama' => 'Pulpen 1 Lusin 1 Warna',
                'image' => 'Images/pulpen2',
                'desc' => 'Berisikan 1 lusin pulpen berwarna hitam.',
                'price' => 10000,
                'stock' => 12,

            ],
            [
                'prodtypeId' => 2,
                'prodnama' => 'Paket Buku Tulis Isi 4 Buku',
                'image' => 'Images/buku1',
                'desc' => 'Buku tulis isi 4 dengan harga lebih murah dibandingkan harga satuan',
                'price' => 20000,
                'stock' => 15,

            ],
            [
                'prodtypeId' => 2,
                'prodnama' => 'Paket Buku Tulis Isi 5 Buku',
                'image' => 'Images/buku2',
                'desc' => '5 buku tulis 120 halaman dalam satu paket cocok untuk yang membutuhkan buku lebih tapi dengan harga lebih murah',
                'price' => 23000,
                'stock' => 30,

            ],
            [
                'prodtypeId' => 3,
                'prodnama' => 'Penggaris Kayu 1 Set Lengkap',
                'image' => 'Images/penggaris1',
                'desc' => '3 Penggaris kayu dalam 1 paket. Didalamnya ada yang panjang: 70cm, 30cm, dan 90cm',
                'price' => 30000,
                'stock' => 24,
            ],
            [
                'prodtypeId' => 3,
                'prodnama' => 'Penggaris Plastik 1 Set Lengkap',
                'image' => 'Images/penggaris2',
                'desc' => '5 penggaris plastik dalam 1 paket. didalamnya terdapat berbagai macam ukuran: 90cm, 120cm, 30cm, dan 100cm',
                'price' => 24000,
                'stock' => 31,
            ]

        ]);
    }
}
