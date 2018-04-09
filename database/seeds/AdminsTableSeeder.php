<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'full_name'     => 'Admin Account',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'status'   => 1
        ]);
    }
}
