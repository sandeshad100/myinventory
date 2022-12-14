<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get("/form", [StockController::class,'getForm'])->name('addData');

Route::post("/form", [StockController::class,'store'])->name('addData');

Route::get('/display', function () {
    return view('display');
});
Route::get("/display", [StockController::class,'show'])->name('show');

//inc quantity
//pass id from display page to increase form
Route::get("/incItem/{id}", [StockController::class,'incItem'])->name('add.qty');
//now update date
Route::post("/incItemView/{id}", [StockController::class,'incItemView'])->name('incItemView');

//dec quantity
Route::get("/decItem/{id}", [StockController::class,'decItem'])->name('sub.qty');
Route::post("/decItemView/{id}", [StockController::class,'decItemView'])->name('decItemView');

//add category from display page
Route::get("/addCategory", [StockController::class,'addCategory'])->name('add.category');
//get category data and add to table
Route::post("/addCategoryView", [StockController::class,'addCategoryView'])->name('addCategoryView');


