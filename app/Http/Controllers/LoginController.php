<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function redirectToProvider($provider)
    {

        return Socialite::driver($provider)->redirect();
    }

    public function handleProvider($provider)
    {
        $socialize_user = Socialite::with($provider)->user();
        $facebook_user_id = $socialize_user->getId(); // unique facebook user id

        $user = User::where('login_id', $facebook_user_id)->first();

        // register (if no user)
        if (!$user) {
            $user = new User;
            $user->name = $socialize_user->name;
            $user->email = $socialize_user->email;
            $user->password = 'facebook_login_f_a_c_e_b_o_o_k';
            $user->login_id = $facebook_user_id;
            $user->save();
        }

        // login
        Auth::loginUsingId($user->id);

        return redirect('/');
    }
}
