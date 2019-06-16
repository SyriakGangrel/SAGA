<?php
namespace App\Services;

use App\Helpers\Utils;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CadastroService
{
	public static function getCadastroById($cadastroId)
	{
		$query = DB::connection('mysql')
			->table('cadastro as c')
			->where('c.id','=',$cadastroId);
			
		$lista = $query->get();
		return $lista ?? null;
	}

	public static function getListaCadastro()
	{
		$query = DB::connection('mysql')
			->table('cadastro as c')
			->orderBy('c.id');
			
		$lista = $query->get();
		return $lista ?? null;
	}

		 public static function saveCadastro($data)
    {
    	// dd($data);
        $dados = [
        	'matricula' => $data['matricula'],
        	'name' => $data['nome'],
        	'sobrenome' => $data['sobrenome'],
        	'data_nascimento' => $data['data_nascimento'],
        	'telefone' => $data['telefone'],
        	'cpf' => $data['cpf'],
        	'rg' => $data['rg'],
        	'email' => $data['email'],
        	'user_mod' => $data['user_mod'],
        	'status' => $data['status'],
        	'created_at' => isset($data['created_at']) ? $data['created_at'] : now(),
        	'updated_at' => now()
        ];

        if(isset($data['cadastro_id'])) {
                DB::connection('mysql')
                ->table('cadastro')
                ->where('id', '=', $data['cadastro_id'])
                ->update($dados);
                $cadastro_id = $data['cadastro_id'];
        } else {
        	$cadastro_id = DB::connection('mysql')
        		->table('cadastro')
        		->insertGetId($dados);
        }

        return $cadastro_id;
    }

}