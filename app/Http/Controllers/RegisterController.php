<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index() {
        return view('livewire.auth.register', [
            'title' => 'Register'
        ]);
    }
    public function index1() {

        $user = User::select ('id', 'name', 'password', 'email', 'role')->get();
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

    public function create()
    {
        return view('livewire.users.create', [
            'title' => 'Create'
        ]);
    }

    public function store1(Request $request) {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email'=> 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        $validatedData['role'] = $request->role;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/user')->with('success', 'Registration successfull! Please Login');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
