<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Catalog\Models\Category\Category;
use Domain\Catalog\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(10)
            ->has(Product::factory(rand(5, 15)))
            ->create();
    }
}
