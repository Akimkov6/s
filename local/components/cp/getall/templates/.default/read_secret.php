<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<!DOCTYPE HTML>
<html>
 <head>
	<meta charset="utf-8">
	<title>Secret</title>
    <link href="styles.css" rel="stylesheet">
 </head>
<body>
<br>
<h1>Секреты</h1>
<br><br>
    <div class="inthis">
        <div id="readSecret">
            <h2>Название</h2> 
            <p id="lookSecterName"></p>
            <h2>Текст</h2> 
            <textarea rows="10" cols="45" id="lookSecterText"></textarea>
        </div>
        <br>
        <button  type="button" id="buttonAdd" onclick="myFunctionAdd()">Добавить</button>
    </div>
</body>
</html>