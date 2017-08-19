
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body style="width: 80%; margin: auto">
    <div style="background-color: #EBEBEB">
        <table style="width: 100%; text-align: center; background-color: #E0E0E0">
            <tr>
                <td>
                    <a href="index.php?ctrl=News&act=All">Все новости</a>
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
                        <button type="submit" name="go"><img src="img/follow.png" style="width: 100px; height: 30px" alt=""></button>
                    </form>
                    <?php
                    if(isset($_GET['go'])){
                        $_GET['ctrl'] = "News";
                        $_GET['act'] = "Column_All";
                    }
                    ?>
                </td>
                <td>
                    <a href="admin.php">На амин панель</a>
                </td>
            </tr>
        </table>





     <!--   <a href="index.php?ctrl=News&act=Column_All&col=title">Titles</a><br>
        <a href="index.php?ctrl=News&act=Column_All&col=author">Authors</a><br>
        <a href="index.php?ctrl=News&act=Column_All&col=id">Id s</a><br>
     -->


    </div>
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
</body>
</html>

