<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "такой себе тест");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetTitle("Отзывы");
?>
<p>Заголовок - <?$APPLICATION->ShowTitle()?></p>
<p>test - <?$APPLICATION->ShowProperty("test")?></p>
<p>title - <?$APPLICATION->ShowProperty("title")?></p>
<p>keywords - <?$APPLICATION->ShowProperty("keywords")?></p>
<p>desc - <?$APPLICATION->ShowProperty("description")?></p>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>