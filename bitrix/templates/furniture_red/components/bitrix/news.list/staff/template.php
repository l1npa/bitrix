<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div id="workarea">
    <h1 id="pagetitle"><?=$arResult["NAME"]?></h1>
    <p>
        Успешное развитие бизнеса – во многом результат квалифицированной работы руководства. <b>«Мебельная компания»</b> на мебельном рынке уже 18 лет. За это время Компания не только сохранила, но и упрочила лидирующие позиции среди
        ведущих игроков мебельного рынка.
    </p>

    <p>
        <b>«Мебельная компания»</b> из года в год расширяет ассортимент выпускаемой продукции, наращивает темпы и объемы производства, увеличивает производственные и складские площади, развивает отношения с партнерами со всех регионов
        страны и налаживает связи с зарубежными партнерами. В большой степени это заслуга хорошо подготовленного руководящего состава и его грамотной политики.
    </p>
	
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <h3>Заместитель генерального директора Управляющей компании</h3>

    <table cellspacing="10" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <tbody>
            <tr>
                <td valign="top" colspan="2"><?=$arItem["NAME"]?></td>
            </tr>

            <tr>
                <td width="20%" valign="top"><img height="200" width="154" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" title="<?=$arItem["NAME"]?>" alt="<?=$arItem["NAME"]?>" /></td>
                <td width="60%" valign="top"><?=$arItem["PREVIEW_TEXT"]?></td>
            </tr>
        </tbody>
    </table>
	<?endforeach;?>
</div>