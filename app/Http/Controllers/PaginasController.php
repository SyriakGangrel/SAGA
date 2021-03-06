<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaginasService;
use App\Services\UsuariosService;

class PaginasController extends Controller
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
        $paginas = PaginasService::getListaPaginas();

        return view('paginas.index', compact('paginas'));
    }
    
    public function edit($pagina_id)
    {
        $pagina = PaginasService::getListaPaginaById($pagina_id);
        $pagina = $pagina->first();
        $modificador = UsuariosService::getListaUsuariosById($pagina->user);
        $modificador = $modificador->first();
        // dd($modificador);
        return view('paginas.edit', compact('pagina','modificador'));
    }

    public function view($pagina_id)
    {
        $paginas = PaginasService::getListaPaginas();
        $pagina = PaginasService::getListaPaginaById($pagina_id);
        $pagina = $pagina->first();
        $modificador = UsuariosService::getListaUsuariosById($pagina->user);
        $modificador = $modificador->first();
        // dd($modificador);
        return view('paginas.view', compact('pagina','modificador', 'paginas'));
    }


    public function create()
    {
        $paginas = [];
        return view('paginas.create', compact('paginas'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $pagina_id = PaginasService::savePagina($data);
        return redirect()->route('paginas')->with('msgSuccess', 'Salvo com Sucesso');
    }


}
