<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;

class FormController extends Controller
{
    public function formcreate()
    {
        return view('form');
    }

    public function formsubmit(Request $request)
    {
        // return 'Form Submit Successful';

        // warning message
        $rules = [
            'name' => 'required|max:20',
            'email' => 'required|email'
        ];

        // custom message create
        $custommessage = [
            'name.required' => 'enter your name',
            // 'name.required' => "you can't use  five character for your name",
            'email.required' => 'enter your email',
            'email.email' => 'email must be valid'
        ];

        $this->validate($request, $rules, $custommessage);
        return $request->all();
    }

}