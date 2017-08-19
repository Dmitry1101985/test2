<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body style="width: 80%; margin: auto">
<div style="background-color: #87CEEB">
    <table style="width: 100%;height: 50px; text-align: center; background-color: #836FFF">
        <tr>

            <td>
                <a href="admin.php?ctrl=News&act=Add">Добавить новость</a>
            </td>
            <td>
                <a href="admin.php?ctrl=News&act=EditTitles&col=title">Редактировать новость</a>
            </td>
            <td>
                <a href="index.php">На сайт</a>
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