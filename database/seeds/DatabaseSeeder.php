<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
                UserSeeder::class,
            ]);

            DB::table('prodtypes')->insert([
                [
                    'nama' => 'Pulpen',
                    'img' => 'uploads/pulpen1.jpg'
                ],
                [
                    'nama' => 'Buku Tulis',
                    'img' => 'uploads/buku1.jpg'
                ],
                [
                    'nama' => 'Penggaris',
                    'img' => 'uploads/penggaris1.jpg'
                ],
                [
                    'nama' => 'Pensil',
                    'img' => 'uploads/pensil1.jpg'
                ],
            ]);
    
            DB::table('products')->insert([
                [
                    'prodtypeId' => 1,
                    'prodnama' => 'Pulpen 1 Lusin Full Color',
                    'image' => 'uploads/pulpen1.jpg',
                    'desc' => 'Berisikan 1 lusin pulpen dengan 5 warna berbeda: merah,hijau,biru dan putih',
                    'price' => 12000,
                    'stock' => 20
    
                ],
                [
                    'prodtypeId' => 1,
                    'prodnama' => 'Pulpen 1 Lusin 1 Warna',
                    'image' => 'uploads/pulpen2.jpg',
                    'desc' => 'Berisikan 1 lusin pulpen berwarna hitam.',
                    'price' => 10000,
                    'stock' => 12,
    
                ],
                [
                    'prodtypeId' => 1,
                    'prodnama' => 'Pulpen Premium Package',
                    'image' => 'uploads/pulpen3.jpg',
                    'desc' => 'Berisikan 1 pcs pulpen berwarna hitam yang premium dan berkualitas tinggi ',
                    'price' => 100000,
                    'stock' => 5,
    
                ],
                [
                    'prodtypeId' => 2,
                    'prodnama' => 'Paket Buku Tulis Isi 4 Buku',
                    'image' => 'uploads/buku1.jpg',
                    'desc' => 'Buku tulis isi 4 dengan harga lebih murah dibandingkan harga satuan',
                    'price' => 20000,
                    'stock' => 15,
                ],
                [
                    'prodtypeId' => 2,
                    'prodnama' => 'Paket Buku Tulis Isi 5 Buku',
                    'image' => 'uploads/buku2.jpg',
                    'desc' => '5 buku tulis 120 halaman dalam satu paket cocok untuk yang membutuhkan buku lebih tapi dengan harga lebih murah',
                    'price' => 23000,
                    'stock' => 30,
    
                ],
                [
                    'prodtypeId' => 2,
                    'prodnama' => 'Paket Binder',
                    'image' => 'uploads/buku3.jpg',
                    'desc' => 'Binder yang berguna untuk mencatat',
                    'price' => 13000,
                    'stock' => 20,
    
                ],
                [
                    'prodtypeId' => 3,
                    'prodnama' => 'Penggaris Kayu 1 Set Lengkap',
                    'image' => 'uploads/penggaris1.jpg',
                    'desc' => '3 Penggaris kayu dalam 1 paket. Didalamnya ada yang panjang: 70cm, 30cm, dan 90cm',
                    'price' => 30000,
                    'stock' => 24,
                ],
                [
                    'prodtypeId' => 3,
                    'prodnama' => 'Penggaris Plastik 1 Set Lengkap',
                    'image' => 'uploads/penggaris2.jpg',
                    'desc' => '5 penggaris plastik dalam 1 paket. didalamnya terdapat berbagai macam ukuran: 90cm, 120cm, 30cm, dan 100cm',
                    'price' => 24000,
                    'stock' => 31,
                ],
                [
                    'prodtypeId' => 3,
                    'prodnama' => 'Penggaris Besi',
                    'image' => 'uploads/penggaris3.jpg',
                    'desc' => 'Penggaris yang terbuat dari besi, kualitas terjamin',
                    'price' => 24000,
                    'stock' => 51,
                ],
                [
                    'prodtypeId' => 4,
                    'prodnama' => '1 Lusin Pensil 2B',
                    'image' => 'uploads/pensil1.jpg',
                    'desc' => '1 Lusin Pensil 2B kualitas Standart',
                    'price' => 15000,
                    'stock' => 51,
                ],
                [
                    'prodtypeId' => 4,
                    'prodnama' => '1 Lusin Pensil Ujian 2B',
                    'image' => 'uploads/pensil2.jpg',
                    'desc' => '1 Lusin Pensil 2B Kualitas tinggi yang bisa digunakan untuk ujian',
                    'price' => 20000,
                    'stock' => 51,
                ],
                [
                    'prodtypeId' => 4,
                    'prodnama' => '1 Set Pensil Warna',
                    'image' => 'uploads/pensil3.jpg',
                    'desc' => 'Pensil Warna ini biasa digunakan untuk menggambar dan mewarnai',
                    'price' => 15000,
                    'stock' => 51,
                ]
    
            ]);
        
    }
}
