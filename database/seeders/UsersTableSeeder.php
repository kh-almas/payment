<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        DB::table('users')->insert([
            'role_id'  => '1',
            'name' => 'admin',
            'email'  => 'admin@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        // Member users
        DB::table('users')->insert([
            'role_id'  => '2',
            'name' => 'member',
            'email'  => 'member@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name' => 'newmember',
            'email'  => 'newmember@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name' => 'verynewmember',
            'email'  => 'verynewmember@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name' => 'ultranewmember',
            'email'  => 'ultranewmember@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name' => 'supernewmember',
            'email'  => 'supernewmember@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('password'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

    }
}
