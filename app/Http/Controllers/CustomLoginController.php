<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth; 

class CustomLoginController extends Controller
{
   public function login(Request $request)
   {
       $user = User::where('email', $request->email)->first(); 

       if(Hash::check($request->password, $user->password))
       {
           Auth::login($user); 
           
           return response()->json(['success' => 'Login successful']);
       }
       else 
       {
          return response()->json(['error' => 'These Credentials does not match our records']);
       }
   }

   public function register(Request $request)
   {
       $request->validate([
        'firstname_en' => 'required', 
        'lastname_en' => 'required', 
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6', 
       ]);


      $user =  User::create([
        'firstname_en' => $request->firstname_en,
        'lastname_en'  => $request->lastname_en, 
        'email'        => $request->email, 
        'password'     => bcrypt($request->password), 
       ]);

       Auth::login($user);

       return response()->json(['success' => 'Registration successful']);

   }
}
