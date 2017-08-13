<?php
$id = [1,2,6,12,13,14,15,16];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
    <div>
        <a href="index.php?ctrl=News&act=All">All news</a><br>
        <?php foreach ($id as $one):?>
            <a href="index.php?ctrl=News&act=One&id=<?php echo $one;?>">News id<?php echo $one;?></a><br>
        <?php endforeach;?>


    </div>
</body>
</html>

<?php

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : "News";
//если переменная задана в Гет, то мы берем ее оотуда, если нет - то по умолчанию это News.
//эта переменна будет нужна для формирования запроса контроллера и создания объекта класса
// по умолчанию результат будет $ctrl = "News"

$act = isset($_GET['act']) ? $_GET['act'] : "All";
// по тому же принципу определяем метод класса, который будем использовать. По умолчанию All
// методы класса имеют названия actionAll, actionOne
// по умолчанию результат будет $act = "All"

$controllerClassName = $ctrl . "Controller";
//формируем имя контроллера, к которому будем обращаться. Контроллеры имеют названия
// NewsController, PoemsController и т.д.
// по умолчанию результат будет $controllerClassName = "NewsController"

//require_once __DIR__.'/controllers/' . $controllerClassName . ".php";
//подключаем нужный нам контроллер и добавляем расширение php
// по умолчанию результат будет require_once __DIR__.'/controllers/NewsController.php';

$method =  "action" . $act;
// определяем название метода, который будем использовать
// по умолчанию результат будет $method = "actionAll"

$controller = new $controllerClassName;
//создаем объект того контроллера, который нам задали или по умолчанию
// по умолчанию результат будет $controller = new NewsController

$controller->$method();
//вызываем заданный метод, или по умолчанию
// по умолчанию результат будет $controller->actionAll()

/*
 * Усли взять результат по умолчанию, то мы используем класс NewsController и его метод actionAll(),
 * который находится в NewsController.php, к которому мы подключились.
*/


/*
require_once __DIR__.'/controllers/NewsController.php';
$news = new NewsController();
$news->actionAll(); //это результат работы предконтроллера
*/
?>