<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Utils
{
public const PRODUTO = 1;
public const SERVICO = 2;

public const FORMA_PAGAMENTO = [
'BOLETO' => 'Boleto',
'TRANSFERENCIA' => 'Tranferência',
'CARTAO_DE_CREDITO' => 'Cartão de Crédito',
'BNDES' => 'BNDES',
'INVOICE' => 'Invoice'
];


// formata data de:'29/05/2019' para:'2019-05-29'
public static function dateFormatSpecial($date)
{
$dt = null;
if ($date) {
$dt  = str_replace('/','.',$date);
$dt = Carbon::parse($dt)->format('Y-m-d');
}
return $dt;
}

// formata data de:'29/05/2019' para:'2019-05-29'
public static function datetimeFormatSpecial($date)
{
$dt = null;
if ($date) {
$dt  = str_replace('/','.',$date);
$dt = Carbon::parse($dt)->format('Y-m-d');
}
return $dt;
}

public static function dateFormat($date)
{
$dt = null;
if ($date) {
$dt = Carbon::parse($date)->format('d/m/Y');
}
return $dt;
}
public static function datetimeFormat($datetime)
{
$dt = null;
if ($datetime) {
$dt = Carbon::parse($datetime)->format('d/m/Y H:i');
}
return $dt;
}
public static function decimal($valor)
{
$valor_monetario = '0,00';
if ($valor) {
$valor_monetario = number_format($valor, 2, ',', '.');
}
return $valor_monetario;
}

public static function decimalToDb($valor)
{
$valor = str_replace('.', '', $valor);
$valor = str_replace(',', '.', $valor);
return $valor;
}

public static function mask($val, $mask)
{
$maskared = '';
$k = 0;
for($i = 0; $i<=strlen($mask)-1; $i++) {
if($mask[$i] == '#') {
if(isset($val[$k])) {
$maskared .= $val[$k++];
}
} else {
if(isset($mask[$i])) {
$maskared .= $mask[$i];
}
}
}
return $maskared;
}

public static function clearDocumento($val)
{
$documento = preg_replace('/\D/', '', $val);
return $documento;
}


public static function titleCase($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("de", "da", "dos", "das", "do", "I", "II", "III", "IV", "V", "VI"))
{
$string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");

foreach ($delimiters as $dlnr => $delimiter) {
$words = explode($delimiter, $string);
$newwords = array();
foreach ($words as $wordnr => $word) {
if (in_array(mb_strtoupper($word, "UTF-8"), $exceptions)) {
// check exceptions list for any words that should be in upper case
$word = mb_strtoupper($word, "UTF-8");
} elseif (in_array(mb_strtolower($word, "UTF-8"), $exceptions)) {
// check exceptions list for any words that should be in upper case
$word = mb_strtolower($word, "UTF-8");
} elseif (!in_array($word, $exceptions)) {
// convert to uppercase (non-utf8 only)
$word = ucfirst($word);
}
array_push($newwords, $word);
}
$string = join($delimiter, $newwords);
  }

  return $string;
}

public static function getCountBadge($badge = null)
{
switch ($badge) {
case 'financeiro-pagamentos':
$count = PagamentoService::getCountPagamento(['FINANCEIRO', 'ADIANTAMENTO']);
return ($count->qtd);

default:
return null;
}
}

}