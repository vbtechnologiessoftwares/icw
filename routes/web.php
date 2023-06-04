<?php

use Illuminate\Support\Facades\Route;

  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\HelthController;

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
Route::post('autosubmit', [AutoController::class, 'autosubmit'])->name('auto.autosubmit');


Route::get('auto-coverage', [AutoController::class, 'autocoverage'])->name('auto-coverage');

Route::get('testing', [AutoController::class, 'testing'])->name('testing');

Route::post('testingsub', [AutoController::class, 'testingsub'])->name('testingsub');
Route::post('testingsubsub', [AutoController::class, 'testingsubsub'])->name('testingsubsub');


Route::get('helth_index', [HelthController::class, 'index'])->name('helth.index')->middleware('auth');
Route::get('helth_show/{id}', [HelthController::class, 'show'])->name('helth.show')->middleware('auth');
Route::post('formsubmit', [HelthController::class, 'formsubmit'])->name('formsubmit');


Route::get('helth-coverage', [HelthController::class, 'helthcoverage'])->name('helth-coverage');



Route::get('/', function () {
    return view('welcome');
});



/*Route::get('helth-coverage', function () {
    return view('helth-coverage');
});*/