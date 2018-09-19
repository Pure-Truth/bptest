<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul id="primary-menu" class="menu nav-menu" aria-expanded="false">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>

</ul>
<?endif?>
