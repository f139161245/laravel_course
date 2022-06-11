<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::post('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'en'],function(){
    Route::get('/insert',[PostController::class,'index']);
    Route::post('store',[PostController::class,'edit'])->name('store');
    Route::post('delete/{id}',[PostController::class,'delet'])->name('delete');
    Route::get('update/{id}',[PostController::class,'updatePage'])->name('update');
    Route::post('upda/{id}',[PostController::class,'update'])->name('upd');
});


// php artisan make:migration create_posts
    // php artisan make:controller PostController
    // php artisan migrate
    // php artisan make:model Post

