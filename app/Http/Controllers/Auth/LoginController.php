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
        // Render the login view
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
            'email' => 'required|email',  // Email must be valid and required
            'password' => 'required',     // Password is required
        ]);

        // Attempt to log in the user with the given email and password
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Authentication successful
            return redirect('/')->with('success', 'Login successful!');  // Redirect to home with a success message
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',  // Error message for invalid credentials
        ])->withInput($request->only('email', 'remember'));  // Keep the email and remember checkbox state
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // dd("test");
        Auth::logout();  // Log out the user

        // Invalidate the session to prevent session hijacking
        $request->session()->invalidate();

        // Regenerate the CSRF token for security
        $request->session()->regenerateToken();

        // Redirect to the home page after logout
        return redirect('/login')->with('info', 'You have been logged out.');
    }
}
