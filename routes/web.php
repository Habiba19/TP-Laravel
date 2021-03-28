<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TacheController;

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

/*
Route::get('/', function () {
    return view('bienvenue');
});
*/
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tache', [TacheController::class, 'index']);

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/contact', [WelcomeController::class, 'contact']);

Route::get('/apropos', [WelcomeController::class, 'apropos']);

Route::resource('taches', 'TacheController');
