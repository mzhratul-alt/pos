<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\Auth\AccountAuthController;


Route::get('/', function () {
    return view('Account.Auth.login');
})->name('account.login_view');

Route::post('/login', [AccountAuthController::class, 'login'])->name('account.login');

Route::middleware('account')->name('account.')->group(function(){
    Route::get('/dashboard', function(){
        return view('Account.account_dashboard');
    })->name('dashboard');

    Route::get('/logout',[AccountAuthController::class,'logout'])->name('logout');
});
