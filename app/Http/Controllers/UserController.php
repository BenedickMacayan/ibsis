<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'phone_no' => 'required',
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // Show Login Form
    public function profile() {
        return view('users.profile');
    }

    // Show Edit Form
    public function edit($id) {
        $users=User::find($id);
        return view('users.edit',compact('users'));
    }

    // Update User Data
    public function update(Request $request, $id) {
        // Make sure logged in user is owner
        if($id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $users=Users::find($id);
        $users->first_name=$request->input("first_name");
        $users->last_name=$request->input("last_name");
        $users->phone_no=$request->input("phone_no");
        // $formFields = $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => ['required'],
        //     'phone_no' => 'required',
        //     'email' => ['required', 'email'],
        // ]);

        // $user->update($formFields);
        $users->update();

        return back()->with('message', 'User Profile updated successfully!');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
