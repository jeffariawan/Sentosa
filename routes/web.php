<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\article\ArticleController;
use App\Http\Controllers\project\PostProjectStartController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

//Article
Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');

//project
Route::get('/project/PostProjectStart',[PostProjectStartController::class,'index'])->name('project.PostProjectStart');
Route::post('/project/PostProjectStart/store',[PostProjectStartController::class,'store'])->name('project.PostProjectStart.store');
