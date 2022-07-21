<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\ChangepasswordRequest;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function change(ChangePassword $request)
    {
        $request->all();
        $user = Auth::user();

        if (Hash::check($request->oldpassword, $user->password)) {
            $user->update([
                'password' => $request->newpassword
            ]);
            return redirect('showprofile');
        }
        return redirect('changepassword');
    }
    public function editprofile(EditProfileRequest $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $user->update($data);
        return redirect('showprofile');
    }
    public function changepassword()
    {
        $user = Auth::user();
        return view('Admins.change', compact('user'));
    }
    public function showprofile()
    {
        $user = Auth::user();
        return view('Admins.profile', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('Admins.editprofile', compact('user'));
    }
    public function index()
    {
        return view('Admins.login');
    }
    public function signup()
    {
        return view('Admins.signup');
    }
    public function customRegistration(UserRequest $request)
    {
        $formData = $request->all();
        User::create($formData);
        return redirect('/');
    }
    public function login()
    {
        return view('Admins.login');
    }
    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, true)) {
            return redirect()->intended('dashboard');
        }
        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $pro=product::all();
            return view('Admins.index', compact('user','pro'));
        }
        return redirect('/');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
