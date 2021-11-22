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
        $path = 'app/developer_docs/universitas.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Uni table seeded!');
    }
}
