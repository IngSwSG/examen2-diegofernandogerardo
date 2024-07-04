<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::resource('materials', MaterialController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
Route::post('/materiales/store', [MaterialController::class, 'store'])->name('materiales.store');
Route::get('/materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');

