<?php

use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
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
            DB::table('artikels')->insert([
                'judul_artikel'=>$faker->catchPhrase,
                'isi_artikel' => $faker->realText($maxNbChars = 2048),
                'banner' => $faker->imageUrl($width = 640, $height = 480),
                'wisata_id' => $faker->numberBetween($min = 1, $max = 5),
                'vote' => $faker->numberBetween($min = 1, $max = 5000),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
               
            ]);
        }
    }
}
