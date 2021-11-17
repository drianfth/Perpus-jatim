<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// authenticate
Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::get('/AdminPerpus', [LoginController::class, 'admin'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/registerAdmin', [RegisterController::class, 'admin'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'show']);



//Main
Route::get('/home', [BookController::class, 'home'])->middleware('auth');

Route::get('/detail/{book:id}', [BookController::class, 'detail']);


Route::get('/pinjam', function () {
    return view('pinjam');
});

Route::get('/profil', [UserController::class, 'profil']);

Route::resource('/books', DashboardBookController::class)->middleware('auth');
Route::resource('/users', DashboardUserController::class)->middleware('auth');
