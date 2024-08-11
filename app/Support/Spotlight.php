<?php

namespace App\Support;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Spotlight
{
    public function search(Request $request)
    {
        $collection = [];
        $products = Product::query()->where('name', 'like', "%$request->search%")->get();

        foreach ($products as $product) {
            $collection[] = [
                'name' => $product['name'],
                'description' => $product['description'],
                'avatar' => asset('storage/img-product/' . $product['img'])
            ];
        }

        return $collection;
    }
}