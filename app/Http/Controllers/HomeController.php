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

    public function product()
    {
        return view('website.products');
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
    public function wishlist()
    {
        return view('website.wishlist');
    }
    public function payment()
    {
        return view('website.payment');
    }
    public function order()
    {
        return view('website.auth.orders');
    }
}
