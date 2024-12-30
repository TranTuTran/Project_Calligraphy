<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){

        return view('admin.login');
    }

    public function login(LoginRequest $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'type'=> User::TYPE_ADMIN,
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.dashboard.index')->with('success','Welcome, Admin!)');
        }
        return back()->withErrors(['email' => 'Invalid credentials or access restricted to administrators.']);
    }
}
