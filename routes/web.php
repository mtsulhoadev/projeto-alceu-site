<?php

use App\Http\Controllers\HomeController;
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

Route::group(['prefix' => '/'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/feature', [HomeController::class, 'feature'])->name('feature');
    Route::get('/price', [HomeController::class, 'price'])->name('price');
    Route::get('/quote', [HomeController::class, 'quote'])->name('quote');
    Route::get('/service', [HomeController::class, 'service'])->name('service');
    Route::get('/team', [HomeController::class, 'team'])->name('team');
    Route::post('/sendemailcontact', [HomeController::class, 'sendEmailContact'])->name('sendemailcontact');
});

