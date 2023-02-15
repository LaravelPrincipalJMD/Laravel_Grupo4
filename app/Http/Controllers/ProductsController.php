<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\User;

use Exception;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::all();
        $users = User::all();
        return view('admin', @compact('products', 'users'));
    }
    public function creacion()
    {
        $products = Product::all();
        return view('admin.insert', @compact('products'));
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
    public function editar()
    {
        $products = Product::all();
        return view('admin.editar', @compact('products'));
    }
    public function borrar()
    {
        $products = Product::all();
        return view('admin.borrar', @compact('products'));
    }
    public function actualizar(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
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
        $users = User::all();
        $products = Product::where('name', 'LIKE', '%'. $name. '%')->get();
        return view('admin', @compact('products', 'users'));

        try{
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
        }catch(Exception $e){
            return back()->with('mensaje', $e->getMessage());
        }

    }
}
