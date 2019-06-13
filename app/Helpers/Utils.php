<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
/**
 * 
 */
class Utins
{
	public static function views($date)
	{
		$dt = null;
		if($date){
			$dt = Carbon::parse($date)->format('d/m/Y');
		}
		return $dt;
	}	
}