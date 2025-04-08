<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Web Development',
            'description' => 'Professional web development services.',
            'category' => 'Technology',
            'price' => 500,
            'image' => 'web_dev.jpg',
        ]);
    }
}
