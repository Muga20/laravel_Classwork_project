<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        return view('client.home');
    }

    public function shop()
    {
        return view('client.shop');
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function orders()
    {
        return view('admin.orders');
    }
    public function login()
    {
        return view('client.login');
    }
    public function signup()
    {
        return view('client.signup');
    }
    
}



