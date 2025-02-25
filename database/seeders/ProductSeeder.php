<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Danh sách sản phẩm
        $products = [
            ['name' => 'Product 1', 'price' => 100.00],
            ['name' => 'Product 2', 'price' => 200.00],
            ['name' => 'Product 3', 'price' => 300.00],
            ['name' => 'Product 4', 'price' => 400.00],
            ['name' => 'Product 5', 'price' => 500.00],
        ];

        // Thêm sản phẩm vào database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}