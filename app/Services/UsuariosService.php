<?php
namespace App\Services;

use App\Helpers\Utils;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuariosService
{
	public static function getListaUsuariosById($usuarioId)
	{
		$query = DB::connection('mysql')
			->table('users as u')
			->where('u.id','=',$usuarioId);
			
		$lista = $query->get();
		return $lista ?? null;
	}

	public static function getListaUsuarios()
	{
		$query = DB::connection('mysql')
			->table('users as u')
			->orderBy('u.id');
			
		$lista = $query->get();
		return $lista ?? null;
	}
}
