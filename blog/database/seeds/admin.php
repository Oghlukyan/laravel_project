<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => bcrypt('@344%&*#9'),
        ]);
    }
}
