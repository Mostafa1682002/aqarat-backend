<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DragonCode\Contracts\Cashier\Auth\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->only('login', 'sinup');
        $this->middleware('auth:admin')->only('logout');
    }
    public function login()
    {
        return view('Admin.index');
    }
    public function sinup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            'password' => "required|string",
            'remember' => "nullable|boolean",
        ]);
        if (auth('admin')->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->route('admin.home')->with('success', 'تم تسجيل الدخول بنجاح');
        }
        return redirect()->back()->withInput($request->only('email'))->with('error', 'البيانات المدخله غير صحيحه');
    }
    public function logout()
    {
        auth('admin')->logout();
        return redirect('/admin/login')->with('success', 'تم تسجيل الخروج بنجاح');
        // ->route('admin.login')
    }
}