<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



/*     <?
    if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die(); */
    
    /* $arComponentVariables = array();
    $arDefaultUrlTemplates404 = array();

        $arVariableAliases = CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases, $arParams['VARIABLE_ALIASES']);
        CComponentEngine::InitComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);
    
        if ($arVariables['element_id'].$arVariables['element_code'] != '')
            $componentPage = 'element';
        elseif ($arVariables['section_id'].$arVariables['section_code'] != '')
            $componentPage = 'section';
        elseif (isset($arVariables['load']))
            $componentPage = 'load';
        elseif (isset($arVariables['favorite']))
            $componentPage = 'favorite';
        elseif (isset($arVariables['search']))
            $componentPage = 'search';
        else
            $componentPage = 'index';
    
        $arResult = array('VARIABLES' => $arVariables, 'ALIASES' => $arVariableAliases);
        $arVarAliaces = $arParams['VARIABLE_ALIASES'];
    
        $arResult['PATH_TO_SECTION'] = $APPLICATION->GetCurPageParam($arParams['VARIABLE_ALIASES']['section_id'].'=#section_id#', $arForDel);
        $arResult['PATH_TO_DETAIL'] = $APPLICATION->GetCurPageParam($arParams['VARIABLE_ALIASES']['element_id'].'=#element_id#', $arForDel);
        $arResult['PATH_TO_LOAD'] = $APPLICATION->GetCurPageParam($arParams['VARIABLE_ALIASES']['load'], $arForDel);
        $arResult['PATH_TO_FAVORITE'] = $APPLICATION->GetCurPageParam($arParams['VARIABLE_ALIASES']['favorite'], $arForDel);
        $arResult['PATH_TO_SEARCH'] = $APPLICATION->GetCurPageParam($arParams['VARIABLE_ALIASES']['search'], $arForDel); */

$this->IncludeComponentTemplate('list');
/* $this->IncludeComponentTemplate('add');
$this->IncludeComponentTemplate('looksecret'); */
?>