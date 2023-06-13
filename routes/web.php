<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SessionController;
use Illuminate\Queue\Events\WorkerStopping;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{var?}', [ProductController::class, 'index']); //  )->name('product.index')

Route::get('/user', function () {
    return view('user');
});
// Route::view('URI', 'viewName');

Route::get('/user', [ProductController::class, 'userfunc']);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/service', 'service');

//http client
Route::get('/posts', [PostController::class, 'apipost']);
Route::get('/posts/{id}', [PostController::class, 'apipostsingle']); //not Working
Route::get('/addpost', [PostController::class, 'addpost']);
Route::get('/editpost/{id}', [PostController::class, 'editpost']);
Route::get('/deletepost/{id}', [PostController::class, 'deletepost']);

//fluent string
Route::any('/fs', function () {
    $s = 'I am a web developer';
    $fluentstring = Str::of($s)
        ->ucfirst($s)
        ->replaceFirst('I', 'we', $s)
        ->replaceFirst('am', 'are', $s)
        ->camel($s);
    echo $fluentstring;
});

//form create
Route::get('/form', [FormController::class, 'formcreate']);
Route::post('/form-submit', [FormController::class, 'formsubmit'])->name('formvalidation');

//http session
Route::get('/session/get', [SessionController::class, 'getsession']);
Route::get('/session/store', [SessionController::class, 'storesession']);
Route::get('/session/delete', [SessionController::class, 'deletesession']);