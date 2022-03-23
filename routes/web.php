<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmsGhibliController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/page', function(){
    return view('page');
});


Route::get('/',[filmsGhibliController::class, "allFilms"])->name("filmspage");
Route::get('/filmGhibli/{id}',[filmsGhibliController::class, "displayOne"])->name("filmpage");
