<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginProcess(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::firstWhere('email', $req->email);

        if (!$user) {
            return redirect()->back()->with('error', 'AKUN TIDAK DITEMUKAN!');
        }
        
        if (!Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('error', 'PASSWORD TIDAK SESUAI!');
        }

        Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        
        if (Auth::user()->role == 'Admin') {
            return redirect('/dashboard')->with('success', 'BERHASIL LOGIN!');
        }

        return redirect('/')->with('success',  'BERHASIL LOGIN!');

    }



    // REGISTER
    public function RegisterProcess(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'role' => 'Member'
        ]);

        return redirect()->back()->with('successRegist', 'REGISTER AKUN BERHASIL!');
    }
}
