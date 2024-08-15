<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use Illuminate\Support\Str;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $totalQuantity = $this->countTotalQuantityCart();
        $totalPrice = $this->countTotalPriceCart();
        $cartItems = CartItems::all();
        return view('cart', compact('cartItems', 'totalQuantity', 'totalPrice'));
    }

    private function countTotalQuantityCart() 
    {
        $cartItems = CartItems::all();
        $totalQuantity = 0;

        foreach ($cartItems as $cartItem) {
            $totalQuantity += $cartItem->quantity;
        }

        return $totalQuantity;
    }

    private function countTotalPriceCart() 
    {
        $cartItems = CartItems::all();
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->subtotal;
        }

        return $totalPrice;
    }

    public function addToCart(Request $request)
    {   
        $cartItem = CartItems::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => 1,
        ]);

        $subtotal = $cartItem->price * $cartItem->quantity;

        $cartItem->subtotal = $subtotal;
        $cartItem->save();


        return redirect('cart');
    }

    public function incrementQuantity($cartItem)
    {
        $item = CartItems::findOrFail($cartItem);
        $item->quantity += 1;
        $item->save();

        $subtotal = $item->price * $item->quantity;

        $item->subtotal = $subtotal; 
        $item->save();

        return redirect('/cart');
    }

    public function decrementQuantity($cartItem)
    {
        $item = CartItems::findOrFail($cartItem);
        $item->quantity -= 1;
        $item->save();

        $subtotal = $item->price * $item->quantity;

        $item->subtotal = $subtotal;
        $item->save();

        return redirect('/cart');
    }

    public function removeProduct(CartItems $cartItem)
    {
        $cartItem->delete();

        return redirect('cart');
    }

    public function removeAllProducts()
    {
        CartItems::truncate();

        return redirect('/cart');
    }
    
    private function countTotalQuantityOrder($orderItemsGroup)
    {
        $totalQuantity = 0;

        foreach ($orderItemsGroup as $orderItem) {
            $totalQuantity += $orderItem->quantity;
        }

        return $totalQuantity;
    }

    private function countTotalPriceOrder($orderItemsGroup) 
    {
        $totalPrice = 0;

        foreach ($orderItemsGroup as $cartItem) {
            $totalPrice += $cartItem->subtotal;
        }

        return $totalPrice;
    }

    public function buy()
    {
        $cartItems = CartItems::all();

        $groupUniqueId = Str::uuid();

        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItems();
            $orderItem->cart_id = $groupUniqueId;
            $orderItem->name = $cartItem->name;
            $orderItem->description = $cartItem->description;
            $orderItem->price = $cartItem->price;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->subtotal = $cartItem->subtotal;

            $orderItem->save();
        }

        CartItems::truncate();

        return redirect('/cart');
    }

    public function user()
    {
        $orderItems = OrderItems::all();
        $groupedOrderItems = $orderItems->groupBy('cart_id');

        $tableTotals = [];
        $tableQuantities = [];

        foreach ($groupedOrderItems as $groupUniqueId => $orderItemsGroup) {
            $tableTotalPrice = $this->countTotalPriceOrder($orderItemsGroup);
            $tableQuantities[$groupUniqueId] = $this->countTotalQuantityOrder($orderItemsGroup);
            $tableTotals[$groupUniqueId] = $tableTotalPrice;
        }

        return view('auth.user', compact('orderItems', 'tableQuantities', 'tableTotals'));
    }

}