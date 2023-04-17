<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});

Route::resource('/series', SeriesController::class);

// Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
// Route::get('/series/criar', [FilmesController::class, 'create']);
// Route::get('/series/editar', [SeriesController::class, 'show'])->name('series.show');
// Route::post('/series/salvar', [SeriesController::class, 'store']);
// Route::delete('/series/delete/{id}', [SeriesController::class, 'delete'])->name('series.delete');

// Route::get('/filmes', [FilmesController::class, 'index']);
