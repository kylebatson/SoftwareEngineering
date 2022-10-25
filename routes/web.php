<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;

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

Route::post('catalog', 'CatalogController@search');

Route::get('catalog/filter', 'App\Http\Controllers\Catalog\CatalogController@filter')->name('catalog.filter');
Route::get('catalog/search', 'App\Http\Controllers\Catalog\CatalogController@search')->name('catalog.search');

Route::resource('catalog', CatalogController::class);

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
