<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $username = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email'=> $username,'password'=> $password])) {
            $token = Auth::user()->createToken('accessToken', []);
            $user =  User::findOrFail(Auth::id());

            auth()->login($user,$token);

            return redirect('/');
        }
        return redirect()->back()->with(['errors' =>'Wrong email or password']);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return redirect()->back();
    }
}
