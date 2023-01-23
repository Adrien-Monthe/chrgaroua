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
    Route::get('/gynecology', [App\Http\Controllers\FrontendController::class, 'service_gynecology'])->name('service_gynecology');
    Route::get('/imaging', [App\Http\Controllers\FrontendController::class, 'service_imaging'])->name('service_imaging');
    Route::get('/centralised-monitoring', [App\Http\Controllers\FrontendController::class, 'service_centralised_monitoring'])->name('service_centralised_monitoring');
    Route::get('/reanimation', [App\Http\Controllers\FrontendController::class, 'service_reanimation'])->name('service_reanimation');

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
