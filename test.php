<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

<?$APPLICATION->IncludeComponent(
"cp:getall", 
".default",
Array(
    "params" => []
),
$component
);
?>

</p><?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?> 