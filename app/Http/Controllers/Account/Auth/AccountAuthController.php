<?php

namespace App\Http\Controllers\Account\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountAuthController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:25',
        ]);

        if (Auth::guard('account')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('account.dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('account')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('account.login_view');
    }
}
