<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function products()
    {
        return view('front.products');
    }

    public function product()
    {
        return view('front.product');
    }
}
