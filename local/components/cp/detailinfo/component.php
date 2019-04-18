<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


use App\Query\GetSecrets;

$query = new GetSecrets();
$arResult = $query->get([
    'filter'=>['id'=>1]
]);

$this->IncludeComponentTemplate();
?>
