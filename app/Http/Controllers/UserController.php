<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index() {
        return view('auth.login', [
            'title' => "Login"
        ]);
    }

    public function create() {
        return view('auth.register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('/');

    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            if (auth()->user()->role == 'admin') {
                return redirect('/admin/home');
            }
        }

        return redirect('/');

    }

    public function logout() {

        Session::flush();
        Auth::logout();

        return redirect('/');

    }
}
