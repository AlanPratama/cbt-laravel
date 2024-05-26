<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('pages.auth.login');
    }

    public function loginProcess(Request $req)
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
    public function registerView()
    {
        return view('pages.auth.register');
    }

    public function registerProcess(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password',
        ]);

        // User::create([
        //     'name' => $req->name,
        //     'proPic' => '/assets/image/noProPic.png',
        //     'email' => $req->email,
        //     'password' => bcrypt($req->password),
        //     'role' => 'Member'
        // ]);

        $user = new User();
        $user->name = $req->name;
        $user->proPic = '/assets/image/noProPic.png';
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->role = 'Member';
        $user->save();


        return redirect()->back()->with('successRegister', 'REGISTER AKUN BERHASIL!');
    }


    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
