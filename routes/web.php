<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatController;
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
    Route::get('/advertisements', 'advertisements')->name('profile.advertisements');
    Route::get('/password-change', 'passwordForm')->name('profile.passowrd.index');
    Route::post('/password-change/{id}', 'password')->name('profile.passowrd.change');
});
Route::group(['prefix' => 'contacts', 'controller' => ContactController::class], function () {
    Route::get('/', 'index')->name('contacts.index');
    Route::post('/', 'store')->name('contacts.store');
});
Route::group(['prefix' => 'advertisements', 'controller' => AdvertisementController::class], function () {
    Route::get('/', 'index')->name('advertisements.index');
    Route::get('/show/{id}', 'show')->name('advertisements.show');
    Route::get('/create', 'create')->name('advertisements.create');
    Route::post('/store', 'store')->name('advertisements.store');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/aboutus', [AboutController::class, 'index'])->name('aboutus.index');
