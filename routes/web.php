<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class);
Route::view('about', 'about');
Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'message']);
Route::get('/profile/{username?}/{lname?}', function ($username = null, $lname = null) {
    return view('profile', ['username' => $username, 'lname' => $lname]);
})->whereAlphaNumeric('name');
