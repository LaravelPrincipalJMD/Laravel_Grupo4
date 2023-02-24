<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Product;

use App\Models\User;

use App\Models\Cart;


class CartController extends Controller
{
  public function addToCart(Request $request)
  {
    try {
      $cart = Cart::where('user_id', $request->idUser)->first();
      if ($cart) {
        $cart->product()->attach($request->productId);
      } else {
        $newCart = new Cart();
        $newCart->user_id = $request->idUser;
        $newCart->save();
        $newCart->product()->attach($request->productId);
      }
      return back()->with('message', 'ADDED TO CART');
    } catch (\Throwable $th) {
      return back()->with('message', $th->getMessage());
    }
  }
  public function getCart(Request $request)
  {
    try {
      
      $cartUser = User::find($request->idUser);
      $cart = Cart::find($cartUser->cart->id);
      $products = $cart->product;
      return view('cart',@compact('products'));
    } catch (\Throwable $th) {
      return back()->with('message', $th->getMessage());
    }
  }
}
