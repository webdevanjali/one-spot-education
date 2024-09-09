<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
        // Reload the roles relationship to ensure it's up-to-date
        $user->load('roles');

        // Debugging: Check roles and role names
        // dump('User:', $user);
        // dump('user->Roles:', $user->roles);
        // dump('user-role-pluck-Role Names:', $user->roles->pluck('role_name'));

        // Fetch the user's roles
        $roles = $user->roles->pluck('role_name');

        // Determine the dashboard URL based on user role
        $roleName = $roles->first() ?? 'guest'; // Default to 'guest' if no roles assigned

        // Debugging: Output role names for checking
        // dump('Role Name:', $roleName);
        // dump('Roles:', $roles);

        // Halt execution and stop further code execution
        // dd('Debugging complete, stopping execution.');


    
            switch (strtolower($roleName)) {
                case 'admin':
                    $redirectUrl = '/admin/dashboard';
                    break;
                case 'teacher':
                    $redirectUrl = '/teacher/dashboard';
                    break;
                case 'student':
                    $redirectUrl = '/student/dashboard';
                    break;
                default:
                    $redirectUrl = '/home'; // Fallback URL
                    break;
            }
    
            return redirect()->intended($redirectUrl);
        }
    
        // Handle failed login
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
    
    
    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Return a JSON response with a success message
        return response()->json([
            'message' => 'Registration successful!',
            'redirect' => 'login' // Optionally include a redirect URL if needed
        ], 200);
        // return redirect()->route('home');
        // return redirect()->route('login');
    }

    // Handle logout request
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

