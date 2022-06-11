<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['prefix'=>'en'],function(){
//     Route::get('/insert',[PostController::class,'index']);
//     Route::post('store',[PostController::class,'edit'])->name('store');
//     Route::post('delete/{id}',[PostController::class,'delet'])->name('delete');
//     Route::get('update/{id}',[PostController::class,'updatePage'])->name('update');
//     Route::post('upda/{id}',[PostController::class,'update'])->name('upd');
// });

Route::get('/insert',[PostController::class,'apiindex']);