<?php

use App\Http\Controllers\Administration\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('admin', function () {
    return view('Administration.Auth.login');
})->middleware('guest')->name('admin.login_view');

Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return view('Administration.dashboard');
    })->name('dashboard');

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
