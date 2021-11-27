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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/manager/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


// 管理画面用
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('photorallyDivisions', App\Http\Controllers\PhotorallyDivisionController::class);
Route::resource('transportDivisions', App\Http\Controllers\TransportDivisionController::class);
Route::resource('tours', App\Http\Controllers\TourController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('tourFilepaths', App\Http\Controllers\TourFilepathController::class);
Route::resource('erratumDivisions', App\Http\Controllers\ErratumDivisionController::class);
Route::resource('tags', App\Http\Controllers\TagController::class);
Route::resource('tourFilepaths', App\Http\Controllers\TourFilepathController::class);
Route::resource('erratumDivisions', App\Http\Controllers\ErratumDivisionController::class);
Route::resource('spots', App\Http\Controllers\SpotController::class);
Route::resource('spotFilepaths', App\Http\Controllers\SpotFilepathController::class);
Route::resource('spotTags', App\Http\Controllers\SpotTagController::class);
Route::resource('destinations', App\Http\Controllers\DestinationController::class);
Route::resource('spotFilepaths', App\Http\Controllers\SpotFilepathController::class);
Route::resource('spotTags', App\Http\Controllers\SpotTagController::class);

// ユーザー画面用
Route::get('/guest', [App\Http\Controllers\GuestController::class, 'index'])->name('guest');
Route::get('plans', [App\Http\Controllers\PlanController::class, 'index'])->name('plans');

