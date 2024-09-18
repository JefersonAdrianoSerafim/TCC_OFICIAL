<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserTeamController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->prefix('/user')->group(function(){
      
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}/edit', [UserController::class, 'update'])->name('user.update');

    Route::get('/team/enter/{id}/{hash}', [UserTeamController::class, 'create'])->name('team_user');
    Route::post('/team/enter/{id}', [UserTeamController::class, 'store'])->name('team_user.store');

    Route::delete('/team/{id}/destroy', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::post('/team/create', [TeamController::class, 'store'])->name('team.store');
    Route::put('/team/{id}/edit', [TeamController::class, 'update'])->name('team.update');

    Route::delete('/commitment/{id}/destroy', [CommitmentController::class, 'destroy'])->name('commitment.destroy');
    Route::post('/commitment/create', [CommitmentController::class, 'store'])->name('commitment.store');
    Route::put('/commitment/{id}/edit', [CommitmentController::class, 'update'])->name('commitment.update');
     
    Route::delete('/subject/{id}/destroy', [SubjectController::class, 'destroy'])->name('subject.destroy');
    Route::post('/subject/create', [SubjectController::class, 'store'])->name('subject.store');
    Route::put('/subject/{id}/edit', [SubjectController::class, 'update'])->name('subject.update');    
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [UserController::class, 'create'])->name('user.create');


Route::get('/', function () {
     return redirect()->route('login');
});
