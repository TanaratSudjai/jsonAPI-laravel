<?php

use App\Http\Controllers\APIcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [APIcontroller::class, 'fetchAPI']);
Route::get('/index/{id}', [APIcontroller::class, 'fetchAPI_ForID']);
