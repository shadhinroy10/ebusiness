<?php

namespace App\Http\Controllers\backend;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user= User::where('email', $request->email)->first();

        if($user->is_admin == 1){

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                // Authentication passed...
                return redirect()->route('admin.dashboard');
            }
        }else{
            return redirect()->route('login')->with('error', 'You have no permission to accecc');
        }

//       no if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1])) {
//            return redirect()->route('admin.dashboard');
//        }else{
//            return redirect()->route('login')->with('error', 'You have no permission to accecc');
//        }


    }

    public function logout()

    {
        Auth::logout();
        return redirect()->route('login');
    }
}
