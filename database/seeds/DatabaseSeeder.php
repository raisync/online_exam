<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'admin' => '1',
            'password' => bcrypt('RDYb1&zXuzDk8MvKRk'),
        ]);

        DB::table('subjects')->insert([
            'subject' => 'English',
            'user_id' => '1',
        ]);

        DB::table('questions')->insert([
            'subject_id' => '1',
            'question' => 'What is the plural for fish?',
        ]);

        DB::table('options')->insert([
            'question_id' => '1',
            'option_a' => 'shark',
            'option_b' => 'dragon',
            'option_c' => 'fishes',
            'option_d' => 'schwarzenegger',
        ]);
    }
}
