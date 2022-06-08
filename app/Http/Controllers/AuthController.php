<?php

namespace App\Http\Controllers;

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
            return redirect()->intended('/');
        }
        else
        {
            return view('auth.login');
        }
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ],
        $messages = [
            'username.required' => 'O campo "usuário" é obrigatório.',
            'password.required' => 'O campo "senha" é obrigatório.'
        ]);

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $validator->validated();

        try {
            if (Auth::attempt($credentials)) 
            {
                $request->session()->regenerate();

                return redirect()->intended('/');
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

        return redirect('/');
    }

    public function indexRegistro()
    {
        if (Auth::check())
        {
            return redirect()->intended('/');
        }
        else
        {
            return view('auth.register');
        }
    }

    public function registro(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'data_nascimento' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ],
        $messages = [
            'username.required' => 'O campo "usuário" é obrigatório.',
            'password.required' => 'O campo "senha" é obrigatório.',
            'password_confirmation.required' => 'O campo "confirmar senha" é obrigatório.',
            'required' => 'O campo ":attribute" é obrigatório.',
            'password.min' => 'A senha precisa ter no mínimo 8 caracteres',
            'username.alpha' => 'O campo "usuário" só deve conter letras.',
            'alpha' => 'O campo :attribute só deve conter letras.',
            'username.unique' => 'Este usuário já está cadastrado em nosso sistema.',
            'unique' => 'Este :attribute já está cadastrado em nosso sistema.',
            'confirmed' => 'As duas senhas precisam ser iguais.'
        ]);

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput();
        }

        $this->registrarNovoUsuario(
            $request->input('name'),
            $request->input('surname'),
            $request->input('email'),
            $request->input('data_nascimento'),
            $request->input('username'),
            $request->input('password')
        );

        return redirect('/');
    }

    private function registrarNovoUsuario($nome, $sobrenome, $email, $data_nascimento, $username, $password)
    {
        $username_exist = User::whereRaw('lower(username) = ?', array(strtolower($username)))->exists();
        $email_exist = User::whereRaw('lower(email) = ?', array(strtolower($email)))->exists();

        //Caso o usuário não exista
        if ( !$username_exist && !$email_exist )
        {    
            //Cria o usuário
            $this->create(array(
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'data_nascimento' => $data_nascimento,
                'username' => $username,
                'password' => $password,
                'admin' => false,
                'status' => true
            ));
        }
        else
        {
            return back()->withErrors('Este usuário Já existe!')->withInput();
        }

        //Autentica o usuário
        $myuser = User::whereRaw('lower(username) = ?', array(strtolower($username)))->where('status', true)->first();

        Auth::login($myuser);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'sobrenome' => $data['sobrenome'],
            'email' => $data['email'],
            'data_nascimento' => $data['data_nascimento'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'admin' => $data['admin'],
            'status' => $data['status'],
        ]);
    }
}