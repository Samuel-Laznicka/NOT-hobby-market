<?php

namespace App\Http\Controllers;

use App\Models\Products;

class SearchController extends Controller
{
    public function __invoke()
    {
        $products = Products::query()
            ->where('name', 'LIKE', '%'.request('q').'%')
            ->get();

        return view('results', ['products' => $products]);    
    }
}
