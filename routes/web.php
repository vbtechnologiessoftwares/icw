<?php

use Illuminate\Support\Facades\Route;

  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AutoController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register')->middleware('auth');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post')->middleware('auth'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('auto_index', [AutoController::class, 'index'])->name('auto.index')->middleware('auth');
Route::get('auto_show/{id}', [AutoController::class, 'show'])->name('auto.show')->middleware('auth');

Route::get('helth_index', [AutoController::class, 'index'])->name('helth.index')->middleware('auth');
Route::get('helth_show/{id}', [AutoController::class, 'show'])->name('helth.show')->middleware('auth');



/*Route::get('/', function () {
    return view('welcome');
});
*/