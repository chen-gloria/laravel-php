<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', [TestController::class, 'index']);
// Route::get('/test/{id}', [TestController::class, 'index']);
Route::get('/contact', [TestController::class, 'contact']);
Route::get('test/{x}/{y}', [TestController::class, 'show_test']);

// Route::resource('tests', TestController::class);

