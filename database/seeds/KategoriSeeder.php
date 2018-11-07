<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'nama_kategori'=>'Sejarah',
            'banner' => '/assets/images/sejarah2.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
           
        ]);
        DB::table('kategori')->insert([
            'nama_kategori'=>'Alam',
            'banner' => '/assets/images/alam.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
           
        ]);
        DB::table('kategori')->insert([
            'nama_kategori'=>'Kuliner',
            'banner' => '/assets/images/kuliner1.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
           
        ]);
        DB::table('kategori')->insert([
            'nama_kategori'=>'Perbelanjaan',
            'banner' => '/assets/images/mall.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
           
        ]);
    }
}
