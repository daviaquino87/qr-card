<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::group([
'middleware' => ['cors']
], function ($router) {
        Route::post('/people',[PersonController::class,'createPerson']);
        Route::get('/people/{idBySearch}',[PersonController::class,'findPersonById']);
});
