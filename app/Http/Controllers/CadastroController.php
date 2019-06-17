<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CadastroService;
use App\Services\UsuariosService;

class CadastroController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $cadastros = CadastroService::getListaCadastro();
        $cadastros = $cadastros->all();
        $count = count($cadastros);
        return view('cadastro.index', compact('cadastros','count'));
    }
    
    public function edit($cadastro_id)
    {
        $cadastro = CadastroService::getCadastroById($cadastro_id);
        $cadastro = $cadastro->first();
        $modificador = UsuariosService::getListaUsuariosById($cadastro->user_mod);
        $modificador = $modificador->first();
        return view('cadastro.edit', compact('cadastro','modificador'));
    }

    public function view($cadastro_id)
    {
        $cadastro = CadastroService::getCadastroById($cadastro_id);
        $cadastro = $cadastro->first();
        $modificador = UsuariosService::getListaUsuariosById($cadastro->user_mod);
        $modificador = $modificador->first();

        return view('cadastro.view', compact('cadastro','modificador'));
    }


    public function create()
    {
        $cadastro = [];
        return view('cadastro.create', compact('cadastro'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $cadastro_id = CadastroService::saveCadastro($data);
        return redirect()->route('cadastro')->with('msgSuccess', 'Salvo com Sucesso');
    }


}
