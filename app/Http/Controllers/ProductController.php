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
        // $var = 'Choose your development stack wisely';
        $var = array(
            'name' => 'Rafi',
            'age' => '18',
            'hobby' => 'Games'
        );
        return view('user', compact('var'));
    }
}