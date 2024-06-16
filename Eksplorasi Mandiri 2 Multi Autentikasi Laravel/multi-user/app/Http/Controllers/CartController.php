<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        
        return view('carts');
    }

    public function addToCart(Product $product, Request $request)
    {
        // Membuat atau memperbarui item di keranjang
        $cartItem = Cart::where('product_id', $product->id)->first();
        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            $cartItem = new Cart();
            $cartItem->product_id = $product->id;
            $cartItem->quantity = 1; // Jika baru ditambahkan, set ke 1
            $cartItem->save();
        }

        return response()->json(['message' => 'Item added to cart successfully']);
    }

    public function removeFromCart(Product $product, Request $request)
    {
        // Mengurangi jumlah item di keranjang
        $cartItem = Cart::where('product_id', $product->id)->first();
        if ($cartItem) {
            $cartItem->decrement('quantity');
            if ($cartItem->quantity === 0) {
                $cartItem->delete(); // Hapus jika jumlahnya 0
            }
        }

        return response()->json(['message' => 'Item removed from cart successfully']);
    }
}
