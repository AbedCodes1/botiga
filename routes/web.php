<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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
    $categories = Category::all();
    return view('welcome',[
       'categories'=> $categories
    ]);
});


Route::get('/categories',[CategoryController::class,'index'])->name('categories.show');

Route::post('/categories',[CategoryController::class,'store']);

Route::get('/categories/create',[CategoryController::class,'create']);

Route::get('/categories/{category}',[CategoryController::class,'show']);