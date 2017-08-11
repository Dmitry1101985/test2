<?php
require_once __DIR__.'/../models/News.php';
class NewsController
{

    public function actionAll(){
        $items = News::getAll();
        include __DIR__.'/../views/news/all.php';
    }
    /*
     * В данном случае мы подключены к модели-классу News в файле News.php
     * Метод actionAll() использует статический метод (используется без создания объекта)
     * класса News. Так же этот метод подключает вьюшку.
     */

    public function actionOne(){
        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
}