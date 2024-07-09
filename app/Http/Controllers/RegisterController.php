<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'username' => [
                'required',
                'min:3',
                'max:255',
                'string',
                'unique:users'
            ],
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:5',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        User::create($validatedData);

        return redirect('login')->with('success', 'Registration successful!! Please login');
    }
}
