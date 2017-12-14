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

        DB::table('users')->insert([
            'name' => 'Student User',
            'email' => 'student@mail.com',
            'admin' => '0',
            'password' => bcrypt('RDYb1&zXuzDk8MvKRk'),
        ]);

        DB::table('subjects')->insert([
            'subject' => 'English',
            'user_id' => '1',
        ]);

        DB::table('subjects')->insert([
            'subject' => 'Math',
            'user_id' => '1',
        ]);

        DB::table('subjects')->insert([
            'subject' => 'Science',
            'user_id' => '1',
        ]);

        DB::table('subjects')->insert([
            'subject' => 'History',
            'user_id' => '2',
        ]);

        DB::table('questions')->insert([
            'subject_id' => '1',
            'question' => 'What is the plural for fish?',
        ]);

        DB::table('questions')->insert([
            'subject_id' => '2',
            'question' => '1+1?',
        ]);

        DB::table('options')->insert([
            'question_id' => '1',
            'option' => 'shark',
        ]);

        DB::table('options')->insert([
            'question_id' => '1',
            'option' => 'dragon',
        ]);

        DB::table('options')->insert([
            'question_id' => '1',
            'option' => 'fishes',
        ]);

        DB::table('options')->insert([
            'question_id' => '1',
            'option' => 'schwarzenegger',
        ]);
    }
}
