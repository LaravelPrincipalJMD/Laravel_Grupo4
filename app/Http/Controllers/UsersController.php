<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class UsersController extends Controller
{
    public function singup(Request $request){
        try {

            $request->validate(['name' => 'required|max:10', 'email' => 'required', 'password' => 'required|max:15|min:6']);
            $newUser = new User;
            $newUser->name = $request->name;
            $newUser->surname = $request->surname;
            $newUser->email = $request->email;
            $newUser->points = 0;
            $newUser->password = $request->password;
            $newUser->save();
    
            return view('index');
        } catch (Exception $e) {
            return back() -> with('error', $e->getMessage());
        }
        
    }
    public function singIn(){
        
    }
    public function getUsers(){
        $users = User::All();
        return view('users', @compact('users'));
    }
    public function getUser(){
        
    }
}
