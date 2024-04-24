<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiNewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;




Route::post('/login',[UserController::class,'loginUser']);
Route::group(['middleware' => ['auth:sanctum']], function () {

route::get('news',[ApiNewsController::class,'Getnews']);
route::get('news/{id}',[ApiNewsController::class,'GetnewsById']);
route::post('news/add',[ApiNewsController::class,'addnews']);
route::put('news/update/{id}',[ApiNewsController::class,'updatenews']);
route::delete('news/delete/{id}',[ApiNewsController::class,'DeleteNews']);
Route::get('/categories/{categoryName}', [CategoryController::class,'searchByCategoryName'])->name('categories.articles');
Route::get('user',[UserController::class,'userDetails']);
Route::get('logout',[UserController::class,'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



