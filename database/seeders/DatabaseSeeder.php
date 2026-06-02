<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table(table: 'users')->insert([
            'name' => 'nekita',
            'email' => 'nekita@example.ru',
            'password' => Hash::make(value: '123qwe!@#'),
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

    }
}
