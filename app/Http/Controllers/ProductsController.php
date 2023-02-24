<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\User;

use Exception;

use Illuminate\Http\Request;



class ProductsController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function getAllProducts()
    {
        $products = Product::all();
        $products = Product::paginate(5);
        return view('products', @compact('products'));
    }
    public function products()
    {
        $products = Product::paginate(5);
        return view('adminProducts', @compact('products'));
    }
    public function creacion()
    {
        $products = Product::all();
        return view('admin.insert', @compact('products'));
    }
    public function crear(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'numeric|min:0|max:1000|required',
                'stock' => 'numeric|min:0|max:1000|required'
            ]);
            $newProduct = new Product();
            $newProduct->name = $request->name;
            $newProduct->description = $request->description;
            $newProduct->price = $request->price;
            $newProduct->stock = $request->stock;
            $newProduct->save();
            return back()->with('mensaje', 'Product added successfully');
        } catch (Exception $e) {
            return back()->with('mensaje', $e->getMessage());
        }
    }
    public function editar()
    {
        $products = Product::all();
        $products = Product::paginate(5);
        return view('admin.editar', @compact('products'));
    }
    public function borrar()
    {
        $products = Product::all();
        $products = Product::paginate(5);
        return view('admin.borrar', @compact('products'));
    }
    public function actualizar(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'numeric|min:0|max:1000|required',
            'stock' => 'numeric|min:0|max:1000|required'
        ]);
        $userUpdate = Product::findOrFail($id);
        $userUpdate->name = $request->name;
        $userUpdate->description = $request->description;
        $userUpdate->price = $request->price;
        $userUpdate->stock = $request->stock;
        $userUpdate->save();
        return back()->with('mensaje', 'Product updated');
    }
    public function eliminar($id)
    {
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
        return back()->with('mensaje', 'Product deleted');
    }
    public function buscar(Request $request)
    {
        $name = $request->name;
        $products = Product::where('name', 'LIKE', '%' . $name . '%')->get();
        return view('admin.adminProductsDetalle', @compact('products'));
    }
}
