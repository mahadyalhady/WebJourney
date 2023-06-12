<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Http;



class PostController extends Controller
{
    public function apipost()
    {
        $apipost = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $apipost->json();
    }

    public function apipostsingle($id)
    {
        return 'ok';
        // $apipostsingle = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        // return $apipostsingle->json();
    }

    public function addpost()
    {
        $addpost = http::post('https://jsonplaceholder.typicode.com/posts', ['userId' => 4, 'title' => 'new title', 'body' => 'new details']);
        return $addpost->json();
    }

    public function editpost($id)
    {
        $editpost = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, ['userId' => 4, 'title' => 'new title updated', 'body' => 'new details updated']);
        return $editpost->json();
    }

    public function deletepost($id)
    {
        $deletepost = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id, );
        return $deletepost->json();
    }
}