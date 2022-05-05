<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'LG Mobile',
            'price' => '200',
            'description' => 'A smartphone with 4 GB RAM and much more features',
            'category' => 'mobile',
            'gallery' => 'mobile'
        ]);
    }
}
