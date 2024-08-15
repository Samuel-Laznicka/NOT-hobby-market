<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Categories;
use App\Models\OrderItems;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('index', compact(['categories', 'products']));
    }

    public function shop() 
    {
        $products = Products::all();
        $cartItems = CartItems::all();
        return view('shop', compact('products'));
     }

    public function garden() 
    {
        $products = Products::all();
        return view('shop-categories.shop-garden', compact('products'));
    }

    public function materials() 
    {
        $products = Products::all();
        return view('shop-categories.shop-materials', compact('products'));
    }

    public function tools() 
    {
        $products = Products::all();
        return view('shop-categories.shop-tools', compact('products'));
    }

    public function decor() 
    {
        $products = Products::all();
        return view('shop-categories.shop-decor', compact('products'));
    }

    private function countTotalQuantity() 
    {
        $cartItems = OrderItems::all();
        $totalQuantity = 0;

        foreach ($cartItems as $cartItem) {
            $totalQuantity += $cartItem->quantity;
        }

        return $totalQuantity;
    }

}
