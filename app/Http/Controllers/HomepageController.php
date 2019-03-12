<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function about() 
    {
        return view('home.about');
    }

    public function shop() {
        return view('home.shop');
    }

    public function blog() {
        return view('home.blog');
    }

    public function contact() {
        return view('home.contact');
    }

    public function checkout() {
        return view('home.checkout');
    }

    public function shipping() {
        return view('home.shipping');
    }

    public function payment() {
        return view('home.payment');
    }

    public function product_single() {
        return view('home.product-single');
    }

    public function blog_single() {
        return view('home.blog-single');
    }
}
