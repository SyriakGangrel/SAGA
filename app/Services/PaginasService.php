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
}
