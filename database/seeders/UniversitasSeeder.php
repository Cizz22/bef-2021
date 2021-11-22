<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $path = 'app/developer_docs/countries.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');
    }
}
