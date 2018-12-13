<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Hanif Wafi S',
            'avatar' => '/assets/images/ava1.jpg',
            'username' => 'user1',
            'bio' => 'Short Biodata',
            'email' => 'user1@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name'=>'Maida Krisma R',
            'avatar' => '/assets/images/ava2.jpg',
            'bio' => 'Short Biodata',
            'username' => 'user2',
            'email' => 'user2@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name'=>'M Dzakwan Zaky',
            'avatar' => '/assets/images/ava3.jpg',
            'bio' => 'Short Biodata',
            'username' => 'user3',
            'email' => 'user3@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name'=>'Vania Paramita',
            'avatar' => '/assets/images/ava4.jpg',
            'bio' => 'Short Biodata',
            'username' => 'user4',
            'email' => 'user4@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name'=>'Dummy',
            'avatar' => '/assets/images/ava5.jpg',
            'bio' => 'Short Biodata',
            'username' => 'user5',
            'email' => 'user5@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
