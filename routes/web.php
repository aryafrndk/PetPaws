<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AdminController;
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
// Index Route
Route::get('/', function () {return view('index');})->name('index');

// Dashboard Route
Route::get('/dashbord', function () {return view('dashboard');})->name('dashboard');

// Login User Route
Route::get('/login', function () {return view('login');})->name('login');

Route::post('/logins', [UserController::class, 'logins'])->name('logins');

// Login admin Route
Route::get('/loginadmin', function () {return view('loginadmin');})->name('loginadmin');
Route::get('/registadmin', function () {return view('registadmin');})->name('registadmin');

Route::post('/loginadmins', [AdminController::class, 'loginadmins'])->name('loginadmins');

Route::get('/admins', [UserController::class, 'index']);
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');

// Register Route
Route::get('/register', function () {return view('register');})->name('register');

Route::get('/registberhasil', function () { return view('registberhasil');})->name('registberhasil');

// User Route
Route::get('/datauser', function () { return view('datauser');})->name('datauser');

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('editkucing');
Route::put('/users/{id}', [UserController::class, 'update'])->name('updateuser');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('deleteuser');

// Cats Route
Route::get('/datakucing', function () {return view('datakucing');})->name('datakucing');

Route::get('/tambahkucing', function () {return view('tambahkucing');})->name('tambahkucing');

Route::get('/cats', [CatController::class, 'index']);
Route::post('/cats', [CatController::class, 'store'])->name('cats.store');
Route::get('/cats/{id}/edit', [CatController::class, 'edit'])->name('editkucing');
Route::put('/cats/{id}', [CatController::class, 'update'])->name('updatekucing');
Route::delete('/cats/{id}', [CatController::class, 'destroy'])->name('deletekucing');






