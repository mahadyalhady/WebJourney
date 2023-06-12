<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class PostController extends Controller
{
    public function apipost()
    {
        $apipost = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $apipost->json();
    }

    public function apipostsingle($id)
    {
        $apipostsingle = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $apipostsingle->json();
    }

    public function addpost()
    {
        $addpost = http::post('https://jsonplaceholder.typicode.com/posts', ['userId' => 4, 'title' => 'new title', 'body' => 'new details']);
        return $addpost->json();
    }
}