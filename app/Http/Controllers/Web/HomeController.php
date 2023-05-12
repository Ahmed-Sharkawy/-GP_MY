<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function hotel()
    {
        return view('frontend.hotel');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function program()
    {
        return view('frontend.program');
    }
}
