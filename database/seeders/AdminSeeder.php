<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name'      => 'Admin Bef 1',
            'email'     => 'admin@bef1.com',
            'password'  => Hash::make('adminbef2021nomer1'),
            ],
        );
        DB::table('users')->insert(
            [
                'name'      => 'Admin Bef 2',
                'email'     => 'admin@bef2.com',
                'password'  => Hash::make('adminbef2021nomer2'),
            ],
        );
        DB::table('users')->insert(
            [
                'name'      => 'Admin Bef 3',
                'email'     => 'admin@bef3.com',
                'password'  => Hash::make('adminbef2021nomer3'),
            ],
        );
        DB::table('users')->insert(
            [
                'name'      => 'Admin Bef 4',
                'email'     => 'admin@bef4.com',
                'password'  => Hash::make('adminbef2021nomer3'),
            ],
        );
        DB::table('users')->insert(
            [
                'name'      => 'Admin Bef 5',
                'email'     => 'admin@bef5.com',
                'password'  => Hash::make('adminbef2021nomer5'),
            ],
        );   
    }
}
