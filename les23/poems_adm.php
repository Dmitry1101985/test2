<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
    <title>News</title>
</head>
<body>
<div class="nav_adm">
    <table class="nav_tab" id="nav_tab_adm">
        <tr>

            <td>
                <a href="poems_adm.php?ctrl=Poems&act=Add">Добавить стих</a>
            </td>

            <td>
                <a href="poems_adm.php?ctrl=Poems&act=EditTitles&col=title">Редактировать стих</a>
            </td>
            <td>
                <a href="index.php">На сайт</a>
            </td>
            <td>
                <a href="news_adm.php">Новости</a>
            </td>

        </tr>
    </table>
</div>
<?php

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : "Poems";
$act = isset($_GET['act']) ? $_GET['act'] : "Add";
$controllerClassName = $ctrl . "Controller";
$method =  "action" . $act;
$controller = new $controllerClassName;
$controller->$method();

?>
</body>
</html>
