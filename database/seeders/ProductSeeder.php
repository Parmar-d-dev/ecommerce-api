<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        'name' => 'Demo Product',
        'description' => 'Sample product for testing',
        'price' => 999.99,
        'stock' => 10,
        'status' => true,
    ]);
    }
}
