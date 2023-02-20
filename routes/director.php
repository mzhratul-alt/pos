<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Director\Auth\DirectorAuthController;
use App\Http\Controllers\Director\User\UserController;

Route::get('/', function () {
   return view('Director.Auth.login');
})->name('director.login_view');

Route::post('/login', [DirectorAuthController::class, 'login'])->name('director.login');

Route::middleware('director')->name('director.')->group(function () {
   Route::get('/dashboard', function () {
      return view('Director.director_dashboard');
   })->name('dashboard');

   Route::get('/logout', [DirectorAuthController::class, 'logout'])->name('logout');

   //User Management
   Route::name('user.')->group(function(){
    Route::get('user', [UserController::class, 'index'])->name('index');

   Route::get('/create', [UserController::class, 'create'])->name('create');

   Route::post('/store-user',[UserController::class,'store'])->name('store');
   });
});
