<?php

use App\Http\Controllers\converter;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

// Route::get('/imageconverter', function(){

// });

Route::view("/imageconverter","imageconverter");
//Route::post('imageconverter',[converter::class,'convertmedia']);


Route::post('imageconverter1',[converter::class,'changeformat']);
