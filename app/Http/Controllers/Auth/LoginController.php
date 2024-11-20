<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Fetch the user from the database
        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $request->password) // Plaintext check (not secure, replace with hashed passwords in production)
            ->first();

        // Check if user exists and type is admin
        if (!$user) {
            return redirect()->back()->withErrors(['username' => 'Invalid credentials'])->withInput();
        }

        if ($user->type !== 'admin') {
            return redirect()->back()->withErrors(['type' => 'Access restricted to admin users'])->withInput();
        }

        // Authenticate the user manually
        Auth::loginUsingId($user->id);

        // Redirect to the admin dashboard
        return redirect()->route('admin.dashboard');
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
