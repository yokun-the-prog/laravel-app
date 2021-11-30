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
    Route::get('/', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('admin.index');
    // 管理項目表示
    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::resource('/spots', App\Http\Controllers\SpotController::class);
    Route::resource('/tours', App\Http\Controllers\TourController::class);
    Route::resource('/destinations', App\Http\Controllers\DestinationController::class);
    Route::resource('/photorallyDivisions', App\Http\Controllers\PhotorallyDivisionController::class);
    Route::resource('/transportDivisions', App\Http\Controllers\TransportDivisionController::class);
    Route::resource('/erratumDivisions', App\Http\Controllers\ErratumDivisionController::class);
    Route::resource('/tags', App\Http\Controllers\TagController::class);
    Route::resource('/spotTags', App\Http\Controllers\SpotTagController::class);
    Route::resource('/spotFilepaths', App\Http\Controllers\SpotFilepathController::class);
    Route::resource('/tourFilepaths', App\Http\Controllers\TourFilepathController::class);
});


// 利用画面
Route::group(['prefix' => 'guest', 'middleware' => 'auth'],function(){
    // メニュー画面表示
    Route::get('/', [App\Http\Controllers\HomeController::class, 'guest_index'])->name('guest.index');
    Route::get('/spots', [App\Http\Controllers\SpotController::class, 'guest_index'])->name('guest/spots.index');

    Route::get('/tours', [App\Http\Controllers\TourController::class, 'guest_index'])->name('guest/tours.index');




    // 見どころ紹介用
    // Route::group(['prefix' => 'spots'],function(){
    //     Route::get('/', [App\Http\Controllers\SpotController::class, 'guest_index'])->name('guest/spots.index');
        // Route::get('/show/{spot_id}', [App\Http\Controllers\SpotController::class, 'show'])->name('guest/spots.show');
        // Route::get('/edit/{spot_id}', [App\Http\Controllers\SpotController::class, 'show'])->name('guest/spots.show');
        // Route::get('post/edit/{post_id}', 'PostController@edit')->name('post.edit');

    // });



    // 旅の計画用
    //Route::get();


    // 旅の履歴用
    //Route::get();


    // 掲示板用
    //Route::get();




});



//Route::get('plans', [App\Http\Controllers\PlanController::class, 'index'])->name('plans.index');
