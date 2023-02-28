<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('livewire.auth.register', [
            'title' => 'Register'
        ]);
    }
    public function index1() {

        $user = User::select ('name', 'password', 'email', 'role')->get();
        return view('livewire.users.index', [
            'title' => 'User',
            'users' => $user
        ]);
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email'=> 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}