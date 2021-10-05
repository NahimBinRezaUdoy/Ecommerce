<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(20)->create();

        $products = Product::select('id')->get();

        foreach ($products as $product) {
            $product->addMediaFromUrl('https://unsplash.com/photos/U6zlUjc6FZ8')->toMediaCollection('products');
        }
    }
}
