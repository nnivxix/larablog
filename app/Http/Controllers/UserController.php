<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function login()
  {
    return view('users.login', [
      'title' => 'Login Page',
      'active' => 'login'
    ]);
  }

  public function register()
  {
    return view('users.register', [
      'title' => 'Register Page',
      'active' => 'register'
    ]);
  }

  public function postRegister(Request $request)
  {
    $validationData = $request->validate([
      'name' => 'required|min:5|max:255',
      'username' => 'required|unique:users',
      'email' => 'required|email:dns|unique:users',
      'password' => 'required|min:5|max:255',
    ]);

    $validationData['password'] = Hash::make($validationData['password']);
    User::create($validationData);
    // $request->session()->flash('success', 'Register Account is success, please login!');
    return redirect('/login')->with('success', 'Register Account is success, please login!');
  }
}
