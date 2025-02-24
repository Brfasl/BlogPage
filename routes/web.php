<?php

use App\Http\Controllers\PostDescriptionController;
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
    return view('panel.homepage');
});
Route::resource('descriptions', PostDescriptionController::class);
Route::get('descriptions', [PostDescriptionController::class, 'index'])->name('descriptions.index');
Route::get('descriptions/create', [PostDescriptionController::class, 'create'])->name('descriptions.create');
Route::post('descriptions', [PostDescriptionController::class, 'store'])->name('descriptions.store');
Route::get('descriptions/{description}/edit', [PostDescriptionController::class, 'edit'])->name('descriptions.edit');
Route::put('descriptions/{description}', [PostDescriptionController::class, 'update'])->name('descriptions.update');
Route::delete('descriptions/{description}', [PostDescriptionController::class, 'destroy'])->name('descriptions.destroy');





