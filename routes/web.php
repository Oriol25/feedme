<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('searchFromApi', [HomeController::class, 'searchFromApi'])->name('home.searchFromApi');

Route::get('/api/v1/product/{ean}', [ApiController::class, 'getProductByEAN'])->name('api.product.get');
Route::get('show/{name}/{code}/{product}', [HomeController::class, 'show'])->name('show.product');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
