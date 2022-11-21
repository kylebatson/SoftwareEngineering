<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;
use App\Http\Controllers\Visit\VisitController;
use App\Http\Controllers\Queries\QueriesController;
use App\Http\Controllers\Userlist\UserlistController;


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

Route::group(['middleware' => 'auth'], function () {
    Route::post('catalog', 'CatalogController@search');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/aboutus', function () {
    return view('about');
});

Route::get('catalog/filter', 'App\Http\Controllers\Catalog\CatalogController@filter')->name('catalog.filter');
Route::get('catalog/search', 'App\Http\Controllers\Catalog\CatalogController@search')->name('catalog.search');

Route::resource('catalog', CatalogController::class);

Route::resource('visit', VisitController::class);

Route::resource('queries', QueriesController::class);

Route::resource('userlist', UserlistController::class);

Route::view('/calculator', 'calculator');

Route::get('/index', [CatalogController::class, 'index']);
//add route for about us and contact us

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';