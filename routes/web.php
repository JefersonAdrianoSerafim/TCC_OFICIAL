<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->prefix('/user')->group(function(){
      
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}/edit', [UserController::class, 'update'])->name('user.update');
    
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [UserController::class, 'create'])->name('user.create');


// Route::get('/', function () {
//     return redirect('/user/login');
// });
