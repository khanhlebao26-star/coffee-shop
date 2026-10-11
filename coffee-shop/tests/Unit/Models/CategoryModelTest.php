<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use App\Models\Product;
use Tests\TestCase;

class CategoryModelTest extends TestCase
{
    public function test_able_to_get_products(): void
    {
        $category = Category::factory()
            ->has(Product::factory()->count(3), 'products')
            ->create();

        $this->assertInstanceOf(Product::class, $category->products->random());
        $this->assertCount(3, $category->products);
    }
}
