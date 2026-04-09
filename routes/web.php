<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

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
    return view('welcome');
});

Route::view('/manage_product', 'manage_product');
Route::view('/test_ui', 'test_ui');
Route::view('/manage_notifi', 'manage_notifi');
Route::get('/manage_marca', [BrandController::class, 'index'])->name('cms.marca.dashboard');