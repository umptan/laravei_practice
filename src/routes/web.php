<?php

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

use App\reservation;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('reservation');
});
Route::get('/reservation', function () {
    return view('reservation2');
});

Route::get('reservation2', function () {
    return view('reservation');
});

// Route::get('/reservations', function () {

// });
