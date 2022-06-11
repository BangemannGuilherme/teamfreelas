<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Endereco;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PrincipalController extends Controller
{
    public function perfilUsuario($username)
    {
        if ( Auth::check() && Auth::user()->username == $username )
        {
            $usuario = User::select('users.*', 'endereco.*', 'contato.*')
                            ->join('endereco', 'users.id', '=', 'endereco.usuario_id')
                            ->join('contato', 'users.id', '=', 'contato.usuario_id')
                            ->where('username', $username)->first();
        
            return view('usuario.perfil', compact('usuario'));
        }
        else
        {
            return redirect()->intended('/');
        }
    }

    public function perfilUsuarioAtualizar(Request $request, $usuario_id)
    {
        try
        {
            $data = $request->all();

            foreach ($data as $key => $value) {
                $table = explode('_', $key);
                $column = strval($table[1]);

                if ( isset($table[2]) )
                {
                    $column .= '_'.$table[2];
                }

                if ( $table[0] !== "" || $table[0] !== null )
                {
                    if ( $table[0] === 'usuario' )
                    {
                        $usuario = User::where('id', $usuario_id)->first();
                        if ( $usuario )
                        {
                            $usuario->$column = $data[$key];
                            $usuario->save();
                        }
                    }
                    else if ( $table[0] === 'endereco' )
                    {
                        $endereco = Endereco::where('usuario_id', $usuario_id)->first();
                        if ( $endereco )
                        {
                            $endereco->$column = $data[$key];
                            
                            $endereco->save();
                        }
                    }
                    else if ( $table[0] === 'contato' )
                    {
                        $contato = Contato::where('usuario_id', $usuario_id)->first();
                        if ( $contato )
                        {
                            $contato->$column = $data[$key];
                            $contato->save();
                        }
                    }
                }
            }

            return redirect()->route('usuario.perfil', ['username' => Auth::user()->username]);
        }
        catch(Exception $e)
        {
            Log::error('[perfilUsuarioAtualizar] Erro ao salvar os dados do Usuário. Error ' . $e->getCode() . ': ' . $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine());

            return [
                'success' => false,
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'error' => 'error'
            ];
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
