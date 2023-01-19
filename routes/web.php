<?php

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
Route::redirect('/', '/fr');

Route::group(['prefix' => '{language}'], function () {

    Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
    Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
    Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('services');
    Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
    Route::get('/appointment', [App\Http\Controllers\FrontendController::class, 'appointment'])->name('appointment');

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');


    });


});
