<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request){
        // validation fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|numeric',
            'adresse'=>'required',
            'username'=>'required',
            'tel'=>'required'
        ]);

        $data = $attrs;

        
      
        // create  user
        $password = Str::random(9);
        $User = User::create([
            'name' => $attrs['name'],
            'email' => $attrs['email'],
            'adresse'=>$attrs['adresse'],
            'username'=>$attrs['username'],
            "password" => Hash::make($password)
        ]);
       

        $User->roles()->attach($data['role']);
        $User->save();

        return response([
            'user' => $User,
            'token' => $User->createToken('secret')->plainTextToken
        ]);
    } 
     
}
