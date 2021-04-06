<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API Routes

// Route::get('/users/{name?}', function($name = null){
//     return 'Hi '. $name;
// })->where('name','[a-zA-Z]+');

// Route::get('/products/{id?}', function($id = null){
//     return 'Product id is '. $id;
// })->where('id','[0-9]+');

//Global Constant

Route::get('/users/{name?}', function($name = null){
    return 'Hi '. $name;
});

Route::get('/products/{id?}', function($id = null){
    return 'Product id is '. $id;
});

//Match

Route::match(['get', 'post'], '/students', function(Request $req){
    return 'Request method is '. $req->method();
});

//Any

Route::any('/posts', function(Request $req){
    return 'Request method is '. $req->method();
});

