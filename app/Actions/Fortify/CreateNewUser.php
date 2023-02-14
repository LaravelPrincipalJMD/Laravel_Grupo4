<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Throwable;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input)
    {            Validator::make($input, [
                'name' => ['required', 'string', 'max:15'],
                'username' => ['required', 'string', 'max:15'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'password' => $this->passwordRules(),
            ])->validate();

    
        return User::create([
                'name' => $input['name'],
                'surname' => $input['surname'],
                'email' => $input['email'],
                'points' => 0,
                'password' => Hash::make($input['password']),
            ]); 
            // return $user;
    }
}
