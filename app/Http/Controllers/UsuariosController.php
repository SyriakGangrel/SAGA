<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UsuariosService;

class UsuariosController extends Controller
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
        $usuarios = UsuariosService::getListaUsuarios();
        $usuarios = $usuarios->all();
        return view('usuarios.index', compact('usuarios'));
    }
    
    public function edit($usuario_id)
    {
        $usuario = UsuariosService::getListaUsuariosById($usuario_id);
        $usuario = $usuario->first();
        return view('usuarios.edit', compact('usuario'));
    }

    public function view($usuario_id)
    {
        $usuario = UsuariosService::getListaUsuariosById($usuario_id);
        $usuario = $usuario->first();
        $readonly = 'readonly = "" disabled = ""';
        return view('usuarios.view', compact('usuario','readonly'));
    }

}