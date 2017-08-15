<?php
//require_once __DIR__.'/../models/NewsModel.php';
class NewsController
{

    public function actionAll(){
        $items = NewsModel::getAll();

        $view = new View();
        $view->items = $items;
        $view->display('news/all.php');
        //include __DIR__.'/../views/news/all.php';
    }
    /*
     * В данном случае мы подключены к модели-классу News в файле NewsModel.php
     * Метод actionAll() использует статический метод (используется без создания объекта)
     * класса News. Так же этот метод подключает вьюшку.
     */

    public function actionOne(){
        $id = $_GET['id'];
        $items = NewsModel::getOneById($id);

        $view = new View();
        $view->items = $items;
        $view->display('news/one.php');
    }
}