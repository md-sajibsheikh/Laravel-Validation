<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'form']);

Route::post('/submit',[HomeController::class,'datastore'])->name('submite');

Route::get('/login', [HomeController::class,'log'])->name('dash');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('loginDone');
