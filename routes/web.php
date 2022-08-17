<?php

use App\Models\Menu;
use App\Http\Controllers\MenuController;
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
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::post('/food', [MenuController::class, 'store'])->name('menu.store');

Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');

Route::get('menu/{id}', [MenuController::class, 'show'])->name('menu.show');


Route::get('/menu/{id}/update', [MenuController::class, 'edit'])->name('menu.update');


