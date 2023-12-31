<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return 'User Controller here';
    }

    public function login()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            // return response()->view('errorpage.404');
            return abort(404);
        }
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required'
        ]);
        if (auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Successfully login');
        }
        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }


    public function show($id)
    {
        return view('user')
            ->with('name', 'John Rey')
            ->with('email', 'Johns@gmail.com')
            ->with('age', 17)
            ->with('id', $id);
    }

    public function register()
    {
        return view('user.register');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('message', 'Logout successfully');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        // return $user;

        auth()->login($user);
    }
}
