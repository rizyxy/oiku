<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function admin() {

        if (Auth::check()) {
            return view('admin.home', [
                'title' => 'Home'
            ]);
        }

        return redirect('/');

    }
}
