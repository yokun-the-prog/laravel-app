<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
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

// 管理者用
Route::group(['prefix' => 'admin', 'middleware' => 'admin'],function(){
    // 管理画面表示
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('admin.home');
    // 管理項目表示
    Route::resource('/photorallyDivisions', App\Http\Controllers\PhotorallyDivisionController::class);
    Route::resource('/transportDivisions', App\Http\Controllers\TransportDivisionController::class);
    Route::resource('/tours', App\Http\Controllers\TourController::class);
    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::resource('/tourFilepaths', App\Http\Controllers\TourFilepathController::class);
    Route::resource('/erratumDivisions', App\Http\Controllers\ErratumDivisionController::class);
    Route::resource('/tags', App\Http\Controllers\TagController::class);
    Route::resource('/tourFilepaths', App\Http\Controllers\TourFilepathController::class);
    Route::resource('/erratumDivisions', App\Http\Controllers\ErratumDivisionController::class);
    Route::resource('/spots', App\Http\Controllers\SpotController::class);
    Route::resource('/spotFilepaths', App\Http\Controllers\SpotFilepathController::class);
    Route::resource('/spotTags', App\Http\Controllers\SpotTagController::class);
    Route::resource('/destinations', App\Http\Controllers\DestinationController::class);
    Route::resource('/spotFilepaths', App\Http\Controllers\SpotFilepathController::class);
    Route::resource('/spotTags', App\Http\Controllers\SpotTagController::class);
});


// 利用画面
Route::group(['prefix' => 'guest'],function(){
    // メニュー画面表示
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'guest_index'])->name('guest.home');
    
    // 見どころ紹介用
    //Route::get();

    // 旅の計画用
    //Route::get();


    // 旅の履歴用
    //Route::get();


    // 掲示板用
    //Route::get();




});



//Route::get('plans', [App\Http\Controllers\PlanController::class, 'index'])->name('plans.index');
