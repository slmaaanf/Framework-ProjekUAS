<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Seminar', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Festival', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Workshop', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Kompetisi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Pameran', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
