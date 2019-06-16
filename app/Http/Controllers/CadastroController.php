<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CadastroService;

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
        $cadastros =$cadastros->all();
        return view('cadastro.index', compact('cadastros'));
    }
    
    public function edit($cadastro_id)
    {
        $cadastro = CadastroService::getCadastroById($cadastro_id);
        return view('cadastro.edit', compact('cadastro'));
    }

    public function view($cadastro_id)
    {
        $cadastro = CadastroService::getCadastroById($cadastro_id);
        return view('cadastro.view', compact('cadastro'));
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
