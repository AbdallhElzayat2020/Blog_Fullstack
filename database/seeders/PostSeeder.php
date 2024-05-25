<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'title' => Str::random(20),
            'description' => Str::random(200),
            'status' => 1,
            'date' => date('y-m-d'),
            'user_id' => 1,
        ]);
    }
}
