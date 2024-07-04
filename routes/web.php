<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::get('/materials', [MaterialController::class, 'index']);

/*Route::get('/', function () {
    return view('welcome');
});*/
