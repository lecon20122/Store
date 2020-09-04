<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function Login()
    {
        return view('dashboard.auth.login');
    }
    public function postLogin(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;


        $credentials = [
            'aemail' => $request->input("email"),
            'password' => $request->input("password")
        ];

        if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
            return redirect()->route('Dashboard.index');
        } else {
            return redirect()->back()->with(['error' => 'Information were wrong']);
        }
    }


    public function Logout()
    {
      $logout = auth('admin');
      $logout->logout();
      return redirect()->route('admin.login');
    }
}



