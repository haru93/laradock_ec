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
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('password'),
            'postalcode' => 1234567,
            'address' => '千葉県千葉市無番地',
            'phonenumber' => '000-000-0000',
            'birthday' => '2000-01-01',
            'age' => 20,
            'sex' => 1
        ]);
    }
}
