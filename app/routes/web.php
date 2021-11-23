<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

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
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('posts', App\Http\Controllers\PostController::class);


// Route::get('/trip', [App\Http\Controllers\TripController::class, 'index'])->name('trip');

// Route::get('/start', [App\Http\Controllers\StartController::class, 'index'])->name('start');




// Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

// Route::post('/contact/confirm',  [App\Http\Controllers\ContactController::class, 'confirm'])->name('contact.confirm');

// Route::post('/contact/thanks', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');


// //入力ページ
// Route::get('/contact', 'ContactController@index')->name('contact.index');

// //確認ページ
// Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

// //送信完了ページ
// Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');