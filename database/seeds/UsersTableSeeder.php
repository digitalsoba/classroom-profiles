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
            'display_name' => 'steve_fitzgerald',
            'first_name' => 'Steve',
            'last_name' => 'Fitzgerald',
            'affiliation' => 'Student',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
