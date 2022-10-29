<?php

namespace App\Http\Controllers\Director\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DirectorAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:25',
        ]);

        if (Auth::guard('director')->attempt($credentials, $request->remember)) {

            $request->session()->regenerate();
            return redirect()->route('director.dashboard');
        } else {
            return back()->with("error', 'Credential didn't match");
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('director')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('director.login_view');
    }
}
