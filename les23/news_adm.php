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
                    <a href="news_adm.php?ctrl=News&act=Add">Добавить новость</a>
                </td>

                <td>
                    <a href="news_adm.php?ctrl=News&act=EditTitles&col=title">Редактировать новость</a>
                </td>

                <td>
                    <a href="index.php">На сайт</a>
                </td>
                <td>
                    <a href="poems_adm.php">Стихи</a>
                </td>

            </tr>
        </table>
    </div>
<?php

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : "News";
$act = isset($_GET['act']) ? $_GET['act'] : "Add";
$controllerClassName = $ctrl . "Controller";
$method =  "action" . $act;
$controller = new $controllerClassName;
$controller->$method();

?>
</body>
</html>