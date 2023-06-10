<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($var = null)
    {
        return 'all products ' . $var;
    }

    function userfunc()
    {
        return view('user');
    }
}