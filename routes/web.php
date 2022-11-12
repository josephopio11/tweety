<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetController;

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

Route::middleware(['auth'])->group(function () {

    Route::get('/tweet', [TweetController::class, 'index'])->name('dashboard');
    Route::post('/tweet', [TweetController::class, 'store'])->name('tweet.store');

    Route::redirect('/dashboard', '/tweet', 301);
});

require __DIR__.'/auth.php';
