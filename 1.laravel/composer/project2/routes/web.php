<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\form3i;
use App\Http\Controllers\form4id;
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
// Route::get('form1', function () {
//     return view('form1');
// });

// Route::get('form2', function () {
//     return view('form2');
// });
Route::get('form4id',[form4id::class,'index']);
Route::post('form4id',[form4id::class,'print']);