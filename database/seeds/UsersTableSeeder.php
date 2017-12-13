<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'admin' => '1',
            'password' => bcrypt('RDYb1&zXuzDk8MvKRk'),
        ]);
    }
}
