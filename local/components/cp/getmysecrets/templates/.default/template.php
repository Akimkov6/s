<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<?$APPLICATION->SetAdditionalCSS("/styles.css");?>
<? $APPLICATION->ShowHead(); ?> <!-- !!!!!!!!!!!!!!!!!!!!!!!! -->
      <div id="mySecret" class="block">
      <h1>Мои</h1>
      <table id="tableMySecret"> 
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Text</th>
              <th></th>
          </tr>
               
<?
      $t = "";
      for($i = 0; $i < count($arResult); ++$i) {
            $tr = "<tr>";
            $tr = $tr . "<td>" . $arResult[$i]['id'] . "</td>";
            $tr = $tr . "<td>" . $arResult[$i]['name'] . "</td>";
            $tr = $tr . "<td>". $arResult[$i]['text'] . "</td>";
            $tr = $tr . "<td class='del' data-del=" . $arResult[$i]['id'] . ">Удалить</td>";
            $tr = $tr . "</tr>";
            $t = $t . $tr;
        }
        echo "$t";
?>
      </table>

     </div>

     