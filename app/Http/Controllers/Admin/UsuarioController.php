<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id')->get();
        return view('admin.usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = $request->all();
        $usuario['password'] = Hash::make($usuario['password']);

        Usuario::create($request->all());

        return view('admin.usuario.index');
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
        // $usuario = Usuario::findOrFail($id);

        // return view('admin.usuario.edit', compact('usuario'));

        $usuario = Usuario::where('id', $id)->first();

        return view('admin.usuario.edit', [
            'id' =>  $usuario->id,
            'username' =>  $usuario->username,
            'password' =>  $usuario->password,
            'nome' => $usuario->nome,
            'sobrenome' => $usuario->sobrenome,
            'email' => $usuario->email,
            'data_nascimento' => $usuario->data_nascimento,
            'admin' => $usuario->admin,
            'status' => $usuario->status
        ]);
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
        $data = $request->all();

        $usuario = Usuario::find($id);
        $usuario->nome = $data['nome'];
        $usuario->sobrenome = $data['sobrenome'];
        $usuario->email = $data['email'];

        $usuario->save();

        return view('admin.usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);

        return view('admin.usuario.index');
    }

    /**
     * Enable/Disable the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $usuario = Usuario::find($id);

        return view('admin.usuario.index');
    }

}