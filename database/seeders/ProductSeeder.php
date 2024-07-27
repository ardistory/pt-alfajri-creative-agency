<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'STIKER KROMO',
            'description' => 'Stiker kromo merupakan jenis stiker yang biasanya digunakan untuk label produk kering, karena harganya yang terjangkau',
            'img' => 'stiker-kromo.jpg',
            'category_slug' => 'advertising',
            'subcategory_slug' => 'print-a3'
        ]);
    }
}
