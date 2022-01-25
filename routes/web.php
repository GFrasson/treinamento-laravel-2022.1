<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});

// Usuários
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('users.create');
Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/usuarios/{user}', [UserController::class, 'delete'])->name('users.delete');

// Route::resource('/usuarios', [UserController::class])->names('users');

// Cargos
// Route::resource('/cargos', [RoleController::class])->names('roles');

// Núcleos
// Route::resource('/nucleos', [CoreController::class])->names('cores');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
