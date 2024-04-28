<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Authentication passed
            return redirect('/')->with('success', 'Login successful!'); // Redirect to the home page with success message
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email', 'remember')); // Send back the input (except password) and errors to the login form
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
