<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.register');
        // if (Auth::check())
        // {
        //     return redirect()->intended();
        // }
        // else
        // {
        //     return view('admin/login');
        // }
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ],
        $messages = [
            'required' => 'O campo :attribute é obrigatório.'
        ]);

        $credentials = $validator->validated();

        try {
            if (Auth::attempt($credentials)) 
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'username' => 'A credencial fornecida está incorreta.',
            ])->onlyInput('username');

        } catch (\Exception $e) {
            Log::error('[AuthController]: '.$e);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('admin/login');
    }
}