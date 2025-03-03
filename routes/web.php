<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Back\BlogsController;
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

//test
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('panel.homepage');
});


Route::group(["prefix" => "admin"], function () {
    Route::get('/blogs', function () {
        return "Admin Blogs";
    });

    Route::get('/blogs/{id}', function ($id) {
        return "Blog ID: " . $id;
    });

    Route::get('/profile', function ($id) {
        return "Blog ID: " . $id;
    });
});




Route::resource('descriptions', PostController::class);
Route::get('descriptions', [PostController::class, 'index'])->name('descriptions.index');
Route::get('descriptions/create', [PostController::class, 'create'])->name('descriptions.create');
Route::post('descriptions', [PostController::class, 'store'])->name('descriptions.store');
Route::get('descriptions/{description}/edit', [PostController::class, 'edit'])->name('descriptions.edit');
Route::put('descriptions/{description}', [PostController::class, 'update'])->name('descriptions.update');
Route::delete('descriptions/{description}', [PostController::class, 'destroy'])->name('descriptions.destroy');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
