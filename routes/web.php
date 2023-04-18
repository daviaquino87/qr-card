<?php

use App\Http\Controllers\PersonController;
use App\UseCases\FindPersonUseCase\FindPerson;
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

Route::get('/', function () {
    return view('docs');
});


Route::fallback(function () {
    return view('errors.404');
});
