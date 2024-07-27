<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $category = [
            [
                'slug' => 'advertising',
                'name' => 'Advertising'
            ],
            [
                'slug' => 'graphic-design',
                'name' => 'Graphic Design'
            ],
            [
                'slug' => 'digital-marketing',
                'name' => 'Digital Marketing'
            ]
        ];

        $subcategory = [
            [
                'slug' => 'print-a3',
                'name' => 'Print A3+',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'large-format',
                'name' => 'Large Format',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'dtf-print',
                'name' => 'DTF Print',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'merchandise',
                'name' => 'Merchandise',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'katalog-buku',
                'name' => 'Katalog & Buku',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'flyer-brochure',
                'name' => 'Flyer & Brochure',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'stationary',
                'name' => 'Stationary',
                'category_slug' => 'advertising'
            ],
            [
                'slug' => 'digital-design',
                'name' => 'Digital Design',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'branding',
                'name' => 'Branding',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'product-packaging',
                'name' => 'Product Packaging',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'company-profile',
                'name' => 'Company Profile',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'katalog-product',
                'name' => 'Katalog Product',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'design-website',
                'name' => 'Design Website',
                'category_slug' => 'graphic-design'
            ],
            [
                'slug' => 'sosial-media-management',
                'name' => 'Sosial Media Management',
                'category_slug' => 'digital-marketing'
            ],
            [
                'slug' => 'video-production',
                'name' => 'Video Production',
                'category_slug' => 'digital-marketing'
            ],
            [
                'slug' => 'google-ads',
                'name' => 'Google Ads',
                'category_slug' => 'digital-marketing'
            ],
        ];

        User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('adminptalfajri')
        ]);

        foreach ($category as $value) {
            Category::create([
                'slug' => $value['slug'],
                'name' => $value['name']
            ]);
        }

        foreach ($subcategory as $value) {
            SubCategory::create([
                'slug' => $value['slug'],
                'name' => $value['name'],
                'category_slug' => $value['category_slug']
            ]);
        }
    }
}
