<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('/user') ->group(function(){
    Route::get('/', 'UserController@index') -> name('Usuário');
});

Route::get('/login', [UserController::class, 'index'])->name('login');

Route::get('/', function () {
    return redirect('/login');
});
