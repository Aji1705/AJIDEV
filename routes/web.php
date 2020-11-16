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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/',[App\Http\Controllers\PageController::class, 'index']);
Route::get('/about',[App\Http\Controllers\PageController::class, 'about']);
Route::get('/contact',[App\Http\Controllers\PageController::class, 'contact']);

//token saya IGQVJYa3gxcy1lZAnhHaWVTS1paMVlZAMWgxZAmZADSzJXZAUx4UkFHeEpSRzZAvcXVSUkd5VW5UWVlyeHNKekZAkaDNDZAjROdWhPUFhvQnY1V0YwanVBTlRBNGRLbUZAyV2ZALTm5vY1kwRUpwNnRmcWhTSFNTYQZDZD