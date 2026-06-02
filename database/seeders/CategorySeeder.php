<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    

    public function run(): void
    {
        $elements = [
            ['name' => 'name1'],
            ['name' => 'name1'],
            ['name' => 'name1'],
            ['name' => 'name1'],
            ['name' => 'name1'],
        ];

        foreach($elements as $element) {
            DB::table(table: 'categories')->insert([
            'name' => $element['name'],
        ]);
        }
    }
}
