<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProduitsController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/produits_add', function () {
    return view('produits_add');
});
Route::prefix('categories')->group(function () {

Route::get('/', [CategoriesController::class, 'index'])->name('categories');
Route::post('/', [CategoriesController::class, 'add']);
});
Route::prefix('produits')->group(function () {
    Route::get('/admin', [ProduitsController::class, 'admin']);
    Route::get('/cadre', [ProduitsController::class, 'cadre']);
    Route::get('/technicien', [ProduitsController::class, 'technicien']);
});

Route::get('/404', function () {
    return view('404');
})->name('404');
