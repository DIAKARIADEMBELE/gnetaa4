<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class AdminiController extends Controller
{
    //
    public function register(Request $request){
        // validation fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
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
            'password' => Hash::make($password)
        ]);
       

        $role = Role::select('id')->where('name', 'administrateur')->first();
        $User->roles()->attach($role);
        $User->save();

        return response([
            'user' => $User,
            'token' => $User->createToken('secret')->plainTextToken
        ]);
    }  
    //login
    public function login(Request $request){
        // validation fields
        
        $attrs = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required|numeric'
        ]);
       
      //attempt login
      if(!Auth::attempt($attrs))
      {
        return response( [
                'message' => 'Invalid credencials.',
        ],403);
      }
      //return user & token in response
        return response([
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken
        ], 200);
}
//deconnection
public function logout(){
    auth()->user()->tokens()->delete();
    return response([
        'message' => 'Logout success.'
    ], 200);
} 
 // get user details
 public function user(){
    return response([
        'user' => auth()->user()
    ], 200);
}
//modification
public function update(Request $request)
{
    $attrs = $request->validate([
        'password' => 'required|string'
    ]);

    $image = $this->saveImage($request->image,'profiles');

    auth()->user()->update([
        'password' => $attrs['password'],
        'image' => $image
    ]);

    return response([
        'message' => 'User update.',
        'user' => auth()->user()
    ], 200);
}

}


