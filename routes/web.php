<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCobntroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
Route::get('product',[ProductCobntroller::class,'index2'])->name('product');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/createblog',[BlogController::class,'createBlog'])->name('blog.create');
Route::post('/storeblog',[BlogController::class,'storeBlog'])->name('blog.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
