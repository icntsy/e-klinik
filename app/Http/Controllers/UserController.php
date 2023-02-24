<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livewire.auth.login', [
            'title' => 'Login'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate(Request $request) {
        $request->validate([
            //  'email' => 'required|email',
             'email' => 'required|email:dns',
             'password' => 'required'
         ]);

         dd('berhasil login');

    //      if(Auth::attempt($credentials)) {
    //          $request->session()->regenerate();
    //          return redirect()->intended('/dashboard');
    //      }
    //      return back()->with('loginError', ' Login ');
    //  }

    //  public function logout(Request $request){
    //      Auth::logout();

    //      $request->session()->invalidate();

    //      $request->session()->regenerateToken();

    //      return redirect('/');
     }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}