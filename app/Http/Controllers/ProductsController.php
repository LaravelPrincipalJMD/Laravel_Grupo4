<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('admin', @compact('products'));
    }
    public function crear(Request $request)
    {
        $request->validate(['name' => 'required', 'description' => 'required', 'price' => 'required', 'stock' => 'required']);
        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->stock = $request->stock;
        $newProduct->save();
        return back()->with('mensaje', 'Product added successfully');
    }
    public function editar($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.editar', @compact('products'));
    }
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        $userUpdate = Product::findOrFail($id);
        $userUpdate->name = $request->name;
        $userUpdate->description = $request->description;
        $userUpdate->price = $request->price;
        $userUpdate->stock = $request->stock;
        $userUpdate->save();
        return back()->with('mensaje', 'Producto actualizado');
    }


}
