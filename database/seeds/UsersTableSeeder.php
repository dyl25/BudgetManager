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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            "name" => "epfc",
            "email" => "epfc@example.io",
            "password" => app('hash')->make("epfc12"),
            "created_at" => new DateTime()
        ]);

        DB::table('users')->insert([
            "name" => "negatif",
            "email" => "negatif@example.io",
            "password" => app('hash')->make("epfc12"),
            "created_at" => new DateTime()
        ]);

        DB::table('users')->insert([
            "name" => "noaccount",
            "email" => "noaccount@example.io",
            "password" => app('hash')->make("epfc12"),
            "created_at" => new DateTime()
        ]);
    }
}
