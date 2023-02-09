<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class UsersController extends Controller
{
    public function signup(Request $request)
    {
        try {

            $request->validate(
                [
                    'name' => 'required|max:10',
                    'email' => 'required|email:gmail',
                    'password' => 'required|max:15|min:6'
                ]
            );
            $newUser = new User;
            $newUser->name = $request->name;
            $newUser->surname = $request->surname;
            $newUser->email = $request->email;
            $newUser->points = 0;
            $newUser->password = $request->password;
            $newUser->save();

            return view('index');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

    }
    public function signin(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->password == $request->password)
                return view('index');
            return back()->with('mensaje', 'SOMETHING WENT WRONG');
        } else {
            return back()->with('mensaje', 'SOMETHING WENT WRONG');
        }
    }
    public function getUsers()
    {
        $users = User::All();
        return view('users', @compact('users'));
    }
    public function getUser()
    {

    }
}