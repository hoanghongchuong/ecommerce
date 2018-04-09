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
            'username' => 'gco_admin',
            'full_name' => 'Admin account',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1a2s3d4f5g6h'),
            'status' => 1
        ]);
    }
}
