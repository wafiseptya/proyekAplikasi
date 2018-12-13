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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(WisataSeeder::class);
        $this->call(ArtikelSeeder::class);
    }
}
