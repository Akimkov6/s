<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Секретики");
?><?$APPLICATION->IncludeComponent(
	"cp:detailinfo",
	".default",
	Array(
		"params" => ['id'=>1]
	),
$component
);?>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>