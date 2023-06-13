<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getsession(Request $request)
    {
        if ($request->session()->has('key')) {
            return $request->session()->get('key');
        } else {
            return "session has no value";
        }
    }

    public function storesession(Request $request)
    {
        $request->session()->put('key', 'web journey');
        return "value addes in session successfully!";
    }

    public function deletesession(Request $request)
    {
        $request->session()->forget('key');
        return "value deleted in session successfully!";
    }
}