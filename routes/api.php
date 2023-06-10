<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route create, value pass & return
Route::get('/category/{id?}', function ($id=null) {
    return $id;
})->where('id','[a-zA-Z]+');

Route::get('/numbers/{id?}', function ($id1=null) {
    return $id1;
})->where('id1','[0-9]');

Route::get('/name/{id?}', function ($id=null) {
    return $id;
});

Route::match(['get', 'post'], '/user1', function (Request $request) {
    return 'Request method is :'.$request->method();
});

Route::any('user2', function (Request $request) {
    return 'Request method is :'.$request->method();
});
