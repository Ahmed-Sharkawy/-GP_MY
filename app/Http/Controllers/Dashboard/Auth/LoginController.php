<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('dashboard.auth.login');
    }

    public function store(Request $request)
    {
        return redirect()->route('dashboard.login')->with('error', 'asdasda as dasd');
        dd($request->all());
    }
}
