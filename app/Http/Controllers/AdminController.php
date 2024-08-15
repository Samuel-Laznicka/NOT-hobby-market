<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        $products = Products::all();
        return view('admin.admin', compact(['products']));
    }
    
    public function create(Products $product) {
        return view('admin.admin-create', [
            'product' => $product,
            'products' => Products::all(),
        ]);
    }

    private function getImageLink($category_id)
    {
        switch ($category_id) {
            case 1:
                return 'resources/images/mat-clear.png';
            case 2:
                return 'resources/images/tools-clear.png';
            case 3:
                return 'resources/images/garden-clear.png';
            case 4:
                return 'resources/images/decor-clear.png';
        }
    
        return null;
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'category_id' => ['required', Rule::in([1, 2, 3, 4])],
        ]);

        $imageLink = $this->getImageLink($attributes['category_id']);

        $attributes['image'] = $imageLink;
        $attributes['featured'] = $request->has('featured');

        $product = Products::create($attributes);

        return redirect('/admin');
    }

    public function edit(Products $product) {

        return view('admin.admin-edit', [
            'product' => $product,
            'products' => Products::all(),
        ]);

    }

    public function update(Request $request, Products $product) {

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'category_id' => ['required', Rule::in([1, 2, 3, 4])],
        ]);

        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'category_id' => request('category_id'),
        ]);

        return redirect('/admin');
    }

    public function delete(Products $product) {

        $product->delete();

        return redirect('/admin');
    }
}