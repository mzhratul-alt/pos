<?php

use App\Http\Controllers\Administration\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Administration.Auth.login');
})->middleware('guest')->name('admin.login_view');

Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

Route::middleware('auth')->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return view('Administration.dashboard');
    })->name('dashboard');

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::GET('/register', function(){
        return view('Administration.Auth.register');
    })->name('register_view');

    Route::POST('/register',[AuthController::class,'register'])->name('register');
});
