<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formcreate()
    {
        return view('form');
    }

    public function formsubmit(Request $request)
    {
        // return 'Form Submit Successful';
        return $request->all();
    }

}