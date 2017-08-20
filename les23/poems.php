
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
    <title>Poems</title>
</head>
<body>
<div class="nav_user">
    <table class="nav_tab" id="nav_tab_us">
        <tr>
            <td>
                <a href="poems.php?ctrl=Poems&act=All">Все стихи</a>
            </td>
            <td>
                <label for="col">Посмотреть записи по:</label>
                <form>
                    <select name="col" id="col">
                        <option value="title">заголовок</option>
                        <option value="date">дата</option>
                        <option value="author">автор</option>
                        <option value="id">id</option>
                    </select>
                    <button type="submit" name="go">Сортировать</button>
                </form>
                <?php
                if(isset($_GET['go'])){
                    $_GET['ctrl'] = "Poems";
                    $_GET['act'] = "Column_All";
                }
                ?>
            </td>
            <td>
                <a href="poems_adm.php">На админ панель стихи</a>
            </td>
            <td>
                <a href="index.php">Новости</a>
            </td>

        </tr>
    </table>

</div>
<?php

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : "Poems";
$act = isset($_GET['act']) ? $_GET['act'] : "All";
$controllerClassName = $ctrl . "Controller";
$method =  "action" . $act;
$controller = new $controllerClassName;
$controller->$method();

?>
</body>
</html>