<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jeremy',
            'email' => 'jsarda@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse',
            'email' => 'newman.jesse@gmail.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
    }
}
