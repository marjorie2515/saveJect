<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
   public function login(Request $request){
    $credentials=$request->validate([
    'email'=> 'required|email|exists:users,email',
    'password'=>'required|min:8',
    ]);

if(Auth::attempt($credentials)){
return redirect('/')->with('success','Login successfull');

}

return back()->withErrors(['email' => 'Wrong credentials','password'=> 'Wrong password']);

}

public function create(Request $request){
$datosVerificados=$request->validate([
    'name'=>'required',
    'email'=>'required|email|unique:users,email',
    'password'=>'required|min:8',
    'birthday'=>'required|date',
]);

if(User::create($datosVerificados)){
return redirect('/');
}
return back()->withErrors([
'email'=>'Te equivocaste mijo',
'password'=>'',
'birthday'=>'',
'name'=>'',
]);

}

}

