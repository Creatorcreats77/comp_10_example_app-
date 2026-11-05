<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('category page can be rendered with products and stats', function () {
    $category = Category::factory()->create([
        'name' => 'Electronics',
        'description' => 'Modern digital gadgets and devices',
    ]);

    Product::factory()->create([
        'category_id' => $category->id,
        'name' => 'Smartphone Pro',
        'price' => 799.99,
        'description' => 'High-resolution flagship phone',
    ]);

    $response = $this->get(route('category'));

    $response->assertStatus(200);
    $response->assertSee('Product Categories');
    $response->assertSee('Electronics');
    $response->assertSee('Modern digital gadgets and devices');
    $response->assertSee('Smartphone Pro');
    $response->assertSee('$799.99');
});

test('category page displays clean empty state when no categories exist', function () {
    $response = $this->get(route('category'));

    $response->assertStatus(200);
    $response->assertSee('No Categories Found');
});

test('category can be deleted along with cascading products', function () {
    $category = Category::factory()->create(['name' => 'Books']);
    $product = Product::factory()->create([
        'category_id' => $category->id,
        'name' => 'Laravel Guide',
    ]);

    $response = $this->delete(route('category.destroy', $category->id));

    $response->assertRedirect(route('category'));
    $response->assertSessionHas('success');
    $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    $this->assertDatabaseMissing('products', ['id' => $product->id]);
});

test('deleting a non-existent category returns error flash', function () {
    $response = $this->delete(route('category.destroy', 99999));

    $response->assertRedirect(route('category'));
    $response->assertSessionHas('error');
});
