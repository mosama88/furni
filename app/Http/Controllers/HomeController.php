<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('website.index');
    }


    public function contact()
    {
        return view('website.contact');
    }

    public function about()
    {
        return view('website.about');
    }

    public function shop()
    {
        return view('website.shop');
    }


    public function login()
    {
        return view('website.auth.login');
    }


    public function register()
    {
        return view('website.auth.register');
    }

    public function resetPassword()
    {
        return view('website.auth.reset-password');
    }

    public function cart()
    {
        return view('website.cart');
    }
    public function payment()
    {
        return view('website.payment');
    }
}
