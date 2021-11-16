<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'seed',
            'name' => 'superUser',
            'email' => 'super_user@gmail.com',
            'password' => Hash::make('hallo12345'),
            'is_admin' => '1',
            'email_verified_at' =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'user',
            'last_name' => 'man',
            'name' => 'user01',
            'email' => 'user0101@gmail.com',
            'password' => Hash::make('hallo12345'),
            'is_admin' => '0',
            'email_verified_at' =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
