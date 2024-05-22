<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'title' => 'Product A',
                'slug' => str_slug('Product A'),
                'is_active' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Product B',
                'slug' => str_slug('Product B'),
                'is_active' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
