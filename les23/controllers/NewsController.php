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

    public function actionAdd(){
        if(isset($_POST['submit'])){
            $article = new NewsModel();
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->author = $_POST['author'];
            $article->insert();
        }
        $view = new View();
        $view->display('news/add.php');
    }

    public function actionEditId(){
        $items = NewsModel::getColumnId();
        $view = new View();
        $view->items = $items;
        $view->display('news/all_id_edit.php');
    }

    public function actionEdit(){
        $id = $_GET['id'];
        $items = NewsModel::getOneById($id)[0];

        if(isset($_POST['update'])){
            $items->text = $_POST['text'];
            $items->title = $_POST['title'];
            $items->author = $_POST['author'];
            //var_dump($items); die;
            $items->update();
        }

        $view = new View();
        $view->items = $items;
        $view->display('news/one_edit.php');

    }
}