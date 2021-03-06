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
            [
                'name' => 'root',
                'email' => 'root@gmail.com',
                'password' => Hash::make('password'),
            ], [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('password123'),
            ]
        ]);
    }
}
