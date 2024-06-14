<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Livewire\Livewire;

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

Route::get('/', [SiteController::class, 'index'])->name('index')->middleware('detect-country');
Route::get('/single-product/{slug}', [SiteController::class, 'singleProduct'])->name('single-product');
Route::get('/thanks-page/{tracking_number}', [SiteController::class, 'thanksPage'])->name('thanks-page');
Route::get('/page/{slug}', [SiteController::class, 'page'])->name('page');
Route::get('/tracking-order', [SiteController::class, 'trackingOrder'])->name('trackingOrder');

Route::get('/lang/{locale}', function ($locale) {
    $supportedLocales = ['en', 'ar', 'fr'];

    if (in_array($locale, $supportedLocales)) {
        App::setLocale($locale);
    } else {
        App::setLocale(config('app.locale'));
    }
    return redirect()->back();
})->name('locale');

Route::get('/load-form/{product}', function ($product) {
    return Livewire::mount('apply-form', ['product' => $product]);
})->name('load-form');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
