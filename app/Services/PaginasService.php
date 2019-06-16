<?php
namespace App\Services;

use App\Helpers\Utils;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaginasService
{
	public static function getListaPaginaById($pagina_id)
	{
		$query = DB::connection('mysql')
			->table('paginas as p')
			->where('p.id','=',$pagina_id);
			
		$lista = $query->get();
		return $lista ?? null;
	}

	public static function getListaPaginas()
	{
		$query = DB::connection('mysql')
			->table('paginas as p')
			->orderBy('p.id');
			
		$lista = $query->get();
		return $lista ?? null;
	}

	 public static function savePagina($data)
    {
    	// dd($data);

        $dados = [
        	'name' => $data['nome'],
        	'created_at' => isset($data['criado']) ? $data['criado'] : now(),
        	'updated_at' => now(),
        	'telefone' => $data['telefone'],
        	'user' => $data['usuario_id']
        ];

        if(isset($data['pagina_id'])) {
                DB::connection('mysql')
                ->table('paginas')
                ->where('id', '=', $data['pagina_id'])
                ->update($dados);
                $pagina_id = $data['pagina_id'];
        } else {
        	$pagina_id = DB::connection('mysql')
        		->table('paginas')
        		->insertGetId($dados);
        }

        return $pagina_id;
    }
}
