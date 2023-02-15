<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function allproducts () {
        $product = Product::all();
        return view('products', @compact('products'));
    }

    public function buscar(Request $request)
    {
        $name = $request->name;
        $products = Product::where('name', 'LIKE', '%'. $name. '%')->get();
        return view('products', @compact('products'));
    }

}

