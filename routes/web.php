<?php

use App\Http\Controllers\adm\HomeController;
use App\Http\Controllers\adm\RoleController;
use App\Http\Controllers\adm\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('articles.index');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
});
Route::resource('articles', ArticleController::class);
Route::get('/articles/category/{category}',[ArticleController::class, 'articlesByCat'])->name('article.category');
































//->middleware('hasrole:helper')

Route::prefix('adm')->as('adm.')->group(function ()
{
    Route::get('/home',[HomeController::class, 'index'])->name('home');
});



//->middleware('hasrole:admin');

Route::prefix('adm')->as('adm.')->group(function ()
{
    Route::resource('categories', CategoryContoller::class);
    Route::resource('articles', ArticleController::class);
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/store',[RoleController::class,'store'])->name('roles.store');
    Route::put('/users/{user}/ban',[HomeController::class,'ban'])->name('users.ban');
    Route::put('/users/{user}/unban',[HomeController::class,'unban'])->name('users.unban');
    Route::delete('/roles/destroy/{role}',[RoleController::class,'destroy'])->name('roles.destroy');
});
