<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardPerpusController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
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
Route::get('/petunjuk', function () {
    return view('petunjuk', [
        "title" => "Petunjuk"
    ]);
});
Route::get('/home', [BookController::class, 'home'])->middleware('auth');

Route::get('/detail/{book:id}', [BookController::class, 'detail']);


Route::get('/profil', [UserController::class, 'profil']);
Route::get('/profil/{user:id}', [UserController::class, 'edit']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);

Route::resource('/books', DashboardBookController::class)->middleware('auth');
Route::get('/buku/{book:id}', [BookController::class, 'edit'])->middleware('auth');

Route::resource('/users', DashboardUserController::class)->middleware('auth');
Route::get('/pinjam/{book:id}', [PinjamController::class, 'index']);
Route::post('/pinjam', [PinjamController::class, 'store']);


Route::get('/riwayat', [PinjamController::class, 'show']);
Route::delete('/riwayat/{pinjam:id}', [PinjamController::class, 'destroy']);

Route::get('/perpustakaan', [DashboardPerpusController::class, 'index']);
Route::get('/perpustakaan/{lokasi:id}', [DashboardPerpusController::class, 'show']);
Route::put('/perpustakaan/edit/{pinjam:id}', [DashboardPerpusController::class, 'update']);
