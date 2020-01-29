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
        DB::table('users')->insert(array(
            array('nom' => 'sauvage', 'prenom' => 'cyprien', 'email' => 'cypiou@gmail.com', 'password' => bcrypt('brother4'), 'role' => 'Admin'),
            array('nom' => 'sauvage', 'prenom' => 'cyprien', 'email' => 'cyprien.sauvage974@gmail.com', 'password' => bcrypt('123456'), 'role' => 'Admin'),
            array('nom' => 'lesquelin', 'prenom' => 'ingrid', 'email' => 'ingrid@gmail.com', 'password' => bcrypt('brother4'), 'role' => 'User'),
            array('nom' => 'delafontaine', 'prenom' => 'jean', 'email' => 'jf@gmail.com', 'password' => bcrypt('brother4'), 'role' => 'User'),

        ));
    }
}
