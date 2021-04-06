<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('product.index');
//Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');
Route::get('/user', [HomeController::class, 'index'])->name('user.index');
Route::get('/posts', [ClientController::class, 'getAllPost'])->name('post.getAllPost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('post.getPostById');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('post.addPost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('post.updatePost');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('post.deletePost');
Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');