<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            return redirect()->intended('admin');
        }
        else
        {
            return view('admin.auth.login');
        }
    }

    public function auth(Request $request)
    {
        if ( !User::whereRaw('lower(username) = ?', array(strtolower($request->input('username'))))->where('admin', true)->exists() )
        {
            return back()->withErrors('Você não possui permissão para acessar este painel!')->withInput();
        }
    
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