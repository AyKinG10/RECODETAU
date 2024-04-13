<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('articles.index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryContoller::class)->only('store, edit, update, destroy');
});
Route::resource('articles', ArticleController::class);




Route::prefix('adm')->as('adm.')->middleware('hasrole:helper')->group(function ()
{

});
