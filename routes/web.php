<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'profile', 'controller' => ProfileController::class], function () {
    Route::get('/', 'index')->name('profile.index');
    Route::post('/{id}', 'update')->name('profile.update');
    Route::get('/password-change', 'passwordForm')->name('profile.passowrd.index');
    Route::post('/password-change/{id}', 'password')->name('profile.passowrd.change');
});
Route::group(['prefix' => 'contacts', 'controller' => ContactController::class], function () {
    Route::get('/', 'index')->name('contacts.index');
    Route::post('/', 'store')->name('contacts.store');
});
