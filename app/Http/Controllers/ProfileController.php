<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('auth.profile');
    }

    public function store(Request $request) {
        $user = Auth::user();
        
        $this->validate($request, [
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|confirmed|min:6'
        ]);

        $updateValues = [
            'name'  => $request->name,
            'email' => $request->email
        ];

        if ($request->password) $updateValues['password'] = Hash::make($request->password);

        if ($user->update($updateValues)) 
             $request->session()->flash('alert-success', 'Profile updated successfully.');
        else $request->session()->flash('alert-warning', 'Profile was not updated.');

        return redirect()->action('ProfileController@index');
    }
}
