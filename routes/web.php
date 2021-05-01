<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
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

//Route::get('/user', [HomeController::class, 'index'])->name('user.index');

//Route::get('/posts', [ClientController::class, 'getAllPost'])->name('post.getAllPost');

//Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('post.getPostById');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('post.addPost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('post.updatePost');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('post.deletePost');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join', [PostController::class, 'innerJoinCaluse'])->name('post.innerjoin');

Route::get('/left-join', [PostController::class, 'leftJoinCaluse'])->name('post.leftjoin');

Route::get('/right-join', [PostController::class, 'rightJoinCaluse'])->name('post.rightjoin');



