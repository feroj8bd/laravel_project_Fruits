<?php

use App\Http\Controllers\FruitsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// route for create
Route::get('/fruits/create',[FruitsController::class, 'create'])->name('fruits.create');
// Route::get('/book/create', [LibraryController::class, 'create'])->name('books.create');


// route for index
Route::get('/add-fruits',[FruitsController::class, 'index'])->name('fruits.index');

// route for store
Route::post('/fruits', [FruitsController::class, 'store'])->name('fruits.store');

// route for show
Route::get('/fruits/show/{id}', [FruitsController::class, 'show'])->name('fruits.show');

// route for edit
Route::get('/fruits/edit/{id}', [FruitsController::class, 'edit'])->name('fruits.edit');

// route for update
Route::post('/fruits/update/{id}', [FruitsController::class, 'update'])->name('fruits.update');

// route for delete
Route::get('/fruits/delete/{id}', [FruitsController::class, 'destroy'])->name('fruits.delete');



