<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Director\Auth\DirectorAuthController;


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
   Route::get('/add-user', function(){
      return view('Director.User.add_user');
   })->name('user.register_form');
});
