<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegsiterController;

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
    return view('home',['title' => 'Home Page']);
})->name('home');


Route::get('/menu', [MenuController::class,'index'])->name('menu')->middleware('auth');
Route::get('/menu/category/{category:slug}', [MenuController::class,'menuCategory'])->name('category')->middleware('auth');
Route::get('/menu/product/{product}', [MenuController::class,'viewProduct'])->name('product')->middleware('auth');
Route::get('/contac', function(){
    return view('contac',['title'=> 'bji']);
});

Route::get('/register', [RegsiterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register', [RegsiterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);

