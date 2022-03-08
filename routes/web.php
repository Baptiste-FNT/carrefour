<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\UsersController;
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

Route::get('/connexion', [AuthentificationController::class, 'connexion'])->name('connexion');
Route::post('/connexion', [AuthentificationController::class, 'authentification']);

Route::middleware(['auth.user'])->group(function () {
    Route::get('/deconnexion', [AuthentificationController::class, 'deconnexion']);
    Route::get('/', function () {
        return view('index');
    })->name('acceuil');

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('categories');
        Route::get('/{id}', [CategoriesController::class, 'get']);
    });
    //
    Route::prefix('produits')->group(function () {
        Route::get('/', [ProduitsController::class, 'index'])->name('produits');
        Route::post('/stocks/{id}', [ProduitsController::class, 'stockUpdate']);
    });
});

Route::middleware(['auth.admin'])->group(function () {

    Route::post('/users', [AuthentificationController::class, 'register']);

    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::post('/users/{id}', [UsersController::class, 'update']);
    Route::post('/users/delete/{id}', [UsersController::class, 'delete']);


    Route::prefix('categories')->group(function () {
        Route::post('/', [CategoriesController::class, 'add']);
        Route::post('/{id}', [CategoriesController::class, 'update']);
    });

    Route::prefix('produits')->group(function () {
        Route::post('/', [ProduitsController::class, 'add']);
        Route::post('/delete/{id}', [ProduitsController::class, 'delete']);
        Route::post('/{id}', [ProduitsController::class, 'update']);
    });
});

Route::get('/404', function () {
    return view('404');
})->name('404');
Route::any('{any}', function () {
    return redirect()->route('404');
})->where('any', '.*');
