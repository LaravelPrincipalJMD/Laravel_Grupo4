<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin', @compact('users'));
    }

    public function creacionUser()
    {
        $users = User::all();
        return view('admin.insertUser', @compact('users'));
    }
    public function crearUser(Request $request)
    {
        $request->validate(['name' => 'required', 'surname' => 'required', 'email' => 'required', 'points' => 'required', 'password' => 'required']);
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->surname = $request->surname;
        $newUser->email = $request->email;
        $newUser->points = $request->points;
        $newUser->password = $request->password;
        $newUser->save();
        return back()->with('mensaje', 'user added successfully');
    }
    public function editarUser()
    {
        $users = User::all();
        return view('admin.editarUser', @compact('users'));
    }

    public function borrarUser()
    {
        $users = User::all();
        return view('admin.borrarUser', @compact('users'));
    }
    public function actualizarUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'points' => 'required',
            'password' => 'required'
        ]);
        $userUpdate = User::findOrFail($id);
        $userUpdate->name = $request->name;
        $userUpdate->surname = $request->surname;
        $userUpdate->email = $request->email;
        $userUpdate->points = $request->points;
        $userUpdate->password = $request->password;
        $userUpdate->save();
        return back()->with('mensaje', 'user updated', $request);
    }
    public function eliminarUser($id)
    {
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();
        return back()->with('mensaje', 'user deleted');
    }
    public function buscarUser(Request $request)
    {
        $name = $request->name;
        $products = Product::all();
        $users = User::where('name', 'LIKE', '%'. $name. '%')->get();
        return view('admin', @compact('products', 'users'));
    }
}
