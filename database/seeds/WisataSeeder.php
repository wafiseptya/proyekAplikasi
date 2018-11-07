<?php

use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 25; //batasan berapa banyak data
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('wisata')->insert([
                'nama_wisata'=>$faker->city,
                'deskripsi' => $faker->realText($maxNbChars = 512),
                'banner' => $faker->imageUrl($width = 640, $height = 480),
                'kategori_id' => $faker->numberBetween($min = 1, $max = 4),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
               
            ]);
        }
    }
}
