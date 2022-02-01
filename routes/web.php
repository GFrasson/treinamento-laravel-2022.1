<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CoreController;

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


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    // Dashboard
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
    Route::delete('/membros/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
    
    // Route::resource('/membros', UserController::class)->names('members')->parameters(['membros' => 'member']);
    
    // Cargos
    Route::resource('/cargos', RoleController::class)->names('roles')->parameters(['cargos' => 'role']);
    
    // Núcleos
    Route::resource('/nucleos', CoreController::class)->names('cores')->parameters(['nucleos' => 'core']);
});

Auth::routes();
