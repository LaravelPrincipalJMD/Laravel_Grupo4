<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use Exception;

class UsersController extends Controller
{
    public function admin() {
        return view('admin');
    }
    public function users()
    {
        $users = User::all();
       $users = User::paginate(5);
        return view('adminUsers', @compact('users'));
    }

    public function creacionUser()
    {
        $users = User::all();
       $users = User::paginate(5);
        return view('admin.insertUser', @compact('users'));
    }
    public function crearUser(Request $request)
    {
        $password = Hash::make($request['password']);
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'min:8|max:255|required'
        ]);        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->surname = $request->surname;
        $newUser->email = $request->email;
        $newUser->points = null;
        $newUser->password = $password;
        $newUser->save();
        return back()->with('mensaje', 'user added successfully');
    }
    public function editarUser()
    {
        $users = User::all();
       $users = User::paginate(5);
        return view('admin.editarUser', @compact('users'));
    }

    public function borrarUser()
    {
        $users = User::all();
       $users = User::paginate(5);
        return view('admin.borrarUser', @compact('users'));
    }
    public function actualizarUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'min:8|max:255|required'
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
        $users = User::where('name', 'LIKE', '%'. $name. '%')->get();
        return view('admin.adminUsersDetalle', @compact('users'));
    }

    public function userData (Request $request)
    {
        $user = User::find($request->userId );
        return view("profile")->with("user", $user);
    }

    public function changePassword (Request $request)
    {
        $user = User::find($request->userId );
        $user->password=$request->password;
        $user->save();
        return view("profile")->with("user", $user);
    }

}
