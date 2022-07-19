<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Models\Car;
use App\Models\Category;
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

//Route::view('/dashboard', 'dashboard');
//Route::get('/', [HomeController::class, 'index']);

//Route::get('/about', [HomeController::class, 'about']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('categories', CategoriesController::class);

Route::get('getCars/{category}', [CarsController::class, 'getCars'])->name('cars.getCars');

Route::any('allCars', [CarsController::class, 'allCars'])->name('cars.allCars');

Route::resource('cars', CarsController::class);

Route::resource('tags', TagsController::class);


require __DIR__.'/auth.php';
