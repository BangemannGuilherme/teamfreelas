<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contato;
use App\Models\Endereco;
use App\Models\Freelancer;
use App\Models\Proposta;
use App\Models\Servico;
use App\Models\Solicitacoes;
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
            $usuario = User::select('users.*', 'endereco.*', 'contato.*', 'freelancer.*', 'habilidade.*')
                            ->leftJoin('endereco', 'users.id', '=', 'endereco.usuario_id')
                            ->leftJoin('contato', 'users.id', '=', 'contato.usuario_id')
                            ->leftJoin('freelancer', 'users.id', '=', 'freelancer.user_id')
                            ->leftJoin('tem_habilidade', 'tem_habilidade.freelancer_id', '=', 'freelancer.id')
                            ->leftJoin('habilidade', 'habilidade.id', '=', 'tem_habilidade.habilidade_id')
                            ->where('username', $username)->first();

            return view('usuario.perfil', compact('usuario'));
        }
        else
        {
            return redirect()->intended('/');
        }
    }

    public function perfilUsuarioAtualizar(Request $request, $user_id)
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
                        $usuario = User::where('id', $user_id)->first();
                        if ( $usuario )
                        {
                            $usuario->$column = $data[$key];
                            $usuario->save();
                        }
                    }
                    else if ( $table[0] === 'endereco' )
                    {
                        $endereco = Endereco::where('user_id', $user_id)->first();
                        if ( $endereco )
                        {
                            $endereco->$column = $data[$key];
                            
                            $endereco->save();
                        }
                    }
                    else if ( $table[0] === 'contato' )
                    {
                        $contato = Contato::where('user_id', $user_id)->first();
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
            Log::error('[perfilUsuarioAtualizar] Erro ao salvar os dados do Usu??rio. Error ' . $e->getCode() . ': ' . $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine());

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

    public function perfilFreelancerAtualizar(Request $request, $user_id)
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
                    if ( $table[0] === 'freelancer' )
                    {
                        $freelancer = User::where('id', $user_id)->first();
                        if ( $freelancer )
                        {
                            $freelancer->$column = $data[$key];
                            $freelancer->save();
                        }
                    }
                }
            }

            return redirect()->route('usuario.perfil', ['username' => Auth::user()->username]);
        }
        catch(Exception $e)
        {
            Log::error('[perfilUsuarioAtualizar] Erro ao salvar os dados do Usu??rio. Error ' . $e->getCode() . ': ' . $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine());

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

    public function servicosUsuario($username)
    {
        if ( Auth::check() && Auth::user()->username == $username )
        {
            $cliente = Cliente::where('user_id', Auth::id())->first();

            $servicos = Servico::where('cliente_id', $cliente->id)->orderBy('created_at', 'ASC')->get();
    
            return view('usuario.servicos', compact('servicos'));
        }
        else
        {
            return redirect()->intended('/');
        }
    }

    public function servicoCreate()
    {
        if( Auth::check() )
        {
            $cliente = Cliente::where("user_id", Auth::user()->id)->first();
            return view('servico.create', compact('cliente'));
        }
        else
        {
            return redirect()->route('login.index');
        }
    }

    public function servicoStore(Request $request)
    {    
        $servico = Servico::create([
            'cliente_id' => $request->input('cliente_id'),
            'titulo' => $request->input('titulo'),
            'descricao' => $request->input('descricao'),
            'habilidade_principal_id' => $request->input('habilidade'),
            'valor_pagamento' => $request->input('valor_pagamento'),
            'complexidade' => $request->input('complexidade'),
            'data_estimada' => $request->input('data_estimada'),
        ]);

        return redirect()->route('servico.show', ['id' => $servico->id]);
    }

    public function servico()
    {
        $servicos = Servico::orderBy('created_at', 'ASC')->get();

        return view('servico.servico', compact('servicos'));
    }

    public function servicoShow($id)
    {
        $servico = Servico::where('id', $id)->first();      

        return view('servico.show', compact('servico'));
    }

    public function solicitacaoPendente(Request $request)
    {
        try
        {
            $servico_id = $request->get('servico_id');
            $solicitacoes = Solicitacoes::where('servico_id', $servico_id)->get();

            return [
                'success' => true,
                'message' => 'Solicita????es consultadas com sucesso!',
                'data' => $solicitacoes
            ];
        }
        catch(Exception $e)
        {
            Log::error('[Principal - solicitacaoPendente] Erro ao realizar a consulta. Error ' . $e->getCode() . ': ' . $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine());

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
    

    public function solicitacaoStore(Request $request)
    {
        try
        {
            $freelancer = Freelancer::where('user_id', $request->get('user_id'))->first();

            $solicitacao = Solicitacoes::create([
            'servico_id' => $request->get('servico_id'),
            'freelancer_id' => $freelancer->id,
            'status_id' => 1,
            'mensagem' => $request->get('mensagem'),
            ]);

            return [
                'success' => true,
                'message' => 'Solicita????o enviada com sucesso!'
            ];
        }
        catch(Exception $e)
        {
            Log::error('[Principal - solicitacaoPendente] Erro ao realizar a consulta. Error ' . $e->getCode() . ': ' . $e->getMessage() . '; File: ' . $e->getFile() . '; Line: ' . $e->getLine());

            return [
                'success' => false,
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'error' => 'error'
            ];
        }
        

        return redirect()->route('servico.show', ['id' => $request->input('servico_id')]);
    }

    public function freelancer()
    {
        $freelancers = Freelancer::join('users', 'freelancer.user_id', '=', 'users.id')->get();

        return view('freelancer.freelancer', compact('freelancers'));
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
