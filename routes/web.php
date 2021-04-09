<?php

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
Route::get('/', function () {
    return view('welcome');
});

 
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/all', [App\Http\Controllers\ItemController::class,'index']);

Route::get('/pizza', [App\Http\Controllers\ItemController::class,'pizza']);



Route::get('/momo', [App\Http\Controllers\ItemController::class,'momo']);


Route::get('/sandwich', [App\Http\Controllers\ItemController::class,'sandwich']);



Route::get('/search', function () {
    return view('search');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>

