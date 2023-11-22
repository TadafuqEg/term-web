<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginFrom()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email',Rule::in(User::pluck('email'))],
            'password' => ['required'],
        ]);
        if (auth()->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard.contact-us.index');
        }else{
            Session::flash('error-message', 'Invalid Credentials.');
            return redirect()->back();
        }
    }
}
