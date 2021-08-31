<?php

use App\Http\Controllers\test0901Controller;
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

Route::get('/building', [test0901Controller::class, 'index']);
Route::get('/building/{room?}' , function($room = 101){
    return "部屋番号は" .$room. "です";
});
