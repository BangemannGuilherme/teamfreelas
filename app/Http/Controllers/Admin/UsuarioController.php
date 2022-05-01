<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $usuarios = Usuario::all();
        return view('admin.usuario.index', compact('usuarios'));
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




// namespace App\CS\Controllers;

// use App\Configuracao;
// use App\CS\Models\Redmine\User;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Route;

// class UsuarioController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\View\View
//      */
//     public function index(Request $request)
//     {
//         $search = trim($request->input('busca'));

//         $search = str_replace(' ', '%', $search);

//         if( $search !== '' ){
//             $usuarios = User::where('login', '<>', '')
//                 ->where('login', '<>', Configuracao::get('REDMINE_USUARIO_LOGIN'))
//                 ->where('type', '=', 'User')
//                 ->where(function ($query) use ($search) {
//                     $query->where('login', 'ilike', '%'.$search.'%')
//                         ->orWhere(DB::raw("firstname || ' ' || lastname"), 'ilike', '%'.$search.'%');

//                         if ( is_numeric($search) )
//                         {
//                             $query->orWhere('id', '=', $search);
//                         }
//             })
//             ->orderBy('id', 'ASC')->paginate(10);
//             $usuarios->appends(['busca' => $search]);
//         }
//         else
//         {
//             $usuarios = User::where('login', '<>', '')
//                 ->where('login', '<>', Configuracao::get('REDMINE_USUARIO_LOGIN'))
//                 ->where('type', '=', 'User')
//                 ->orderBy('id', 'ASC')->paginate(10);
//         }

//         $usuarios->setPath('usuarios');

//         view()->addNamespace('CS', app_path('CS/Blades'));

//         return View('CS::Usuario.index')->with('usuarios', $usuarios);
//     }
// }