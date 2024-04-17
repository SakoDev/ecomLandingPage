<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class,'index'])->name('index')->middleware('detect-country');
Route::get('/single-product/{slug}', [SiteController::class,'singleProduct'])->name('single-product');
Route::get('/thanks-page/{tracking_number}', [SiteController::class, 'thanksPage'])->name('thanks-page');
Route::get('/page/{slug}', [SiteController::class, 'page'])->name('page');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
