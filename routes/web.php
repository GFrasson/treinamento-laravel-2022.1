<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

// Membros
Route::get('/membros', [MemberController::class, 'index'])->name('members.index');
Route::get('/membros/create', [MemberController::class, 'create'])->name('members.create');
Route::get('/membros/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::get('/membros/{member}', [MemberController::class, 'show'])->name('members.show');
Route::post('/membros', [MemberController::class, 'store'])->name('members.store');
Route::put('/membros/{member}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/membros/{member}', [MemberController::class, 'delete'])->name('members.delete');

// Route::resource('/membros', [UserController::class])->names('members');

// Cargos
// Route::resource('/cargos', [RoleController::class])->names('roles');

// Núcleos
// Route::resource('/nucleos', [CoreController::class])->names('cores');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
