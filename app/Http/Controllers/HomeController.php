<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->type == 'Seller') {
            return view('sellerProfile');
        }

        elseif (auth()->user()->type == 'Buyer') {
            return view('buyerProfile');
        }

        else {
            return view('home');
        }
    }
}
