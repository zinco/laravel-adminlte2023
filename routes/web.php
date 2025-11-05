<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TabelaController;
use Illuminate\Support\Facades\Auth;
//2024
use App\Http\Controllers\IpController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ClasseController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::group(['middleware' => 'access.control.list'],function(){

    Route::resource('roles', RoleController::class);
    Route::resource('permissoes', ResourceController::class);
    Route::resource('users', UserController::class);
    Route::resource('tabelas', TabelaController::class);


    //lista de ips, 2024
    //ip´s
    Route::resource('Ips', IpController::class);
    Route::resource('Local', LocalController::class);
    Route::resource('Classe', ClasseController::class);
    
});