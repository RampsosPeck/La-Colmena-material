<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected function registered(Request $request, User $user)
    {
        return response()->json($user, 200);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'celular' => ['required', 'string', 'max:12','unique:users,celular'],
            'foto' => ['mimes:jpeg,gif,bmp,png', 'max:2048']
            'email' => ['string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['foto']){
            $foto = request()->file('foto')->store('public/users');
        }else{
            $foto = "avatar.svg";
        }
        return User::create([
            'fullname' => $data['fullname'],
            'slug' => Str::of($data['fullname'])->slug('-'),
            'email' => $data['email'],
            'celular' => $data['fullname'],
            'foto' => Storage::url($foto),
            'formatted_address' => $data['formatted_address'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
