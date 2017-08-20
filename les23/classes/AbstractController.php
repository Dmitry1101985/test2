<?php


class AbstractController
{
    protected static $classModel;
    protected static $dir_view;
    protected static $prop_1;
    protected static $prop_2;
    protected static $prop_3;
    protected static $img_folder;


    public function actionAll(){
        $class = static::$classModel;
        $items = $class::getAll();

        $view = new View();
        $view->items = $items;
        $view->display(static::$dir_view . '/all.php');
        //include __DIR__.'/../views/news/all.php';
    }

    public function actionEditTitles(){
        $class = static::$classModel;
        $column = $_GET['col'];
        $items = $class::getColumn($column);
        $view = new View();
        $view->items = $items;
        $view->display(static::$dir_view . '/all_titles_edit.php');
    }

    public function actionColumn_All(){
        $class = static::$classModel;
        $column = $_GET['col'];
        $items = $class::getColumn($column);

        $view = new View();
        $view->items = $items;
        $view->display(static::$dir_view . '/all_titles.php');
    }

    public function actionColumn_One(){
        $class = static::$classModel;
        $column = $_GET['col'];
        $value = $_GET['val'];
        $items = $class::getOneByColumn($column, $value);
        //var_dump($items); die;
        $view = new View();
        $view->items = $items;
        $view->display(static::$dir_view . '/one.php');
    }

    public function actionAdd(){
        $class = static::$classModel;
        $prop_1 = static::$prop_1;
        $prop_2 = static::$prop_2;
        $prop_3 = static::$prop_3;
        if(isset($_POST['submit'])){
            $item = new $class();
            $item->$prop_1 = $_POST[$prop_1];
            $item->$prop_2 = $_POST[$prop_2];
            $item->$prop_3 = $_POST[$prop_3];
            if($_FILES['pic']['error'] == 0){
                $temp = $_FILES['pic']['tmp_name'];
                $new_name = time() .".". explode('.', $_FILES['pic']['name'])[1];
                move_uploaded_file($temp,"img/" . static::$img_folder . $new_name);
                $item->img_url = "img/" . static::$img_folder . $new_name;
            }
            $item->insert();
        }
        $view = new View();
        $view->display(static::$dir_view . '/add.php');
    }

    public function actionEdit(){
        $class = static::$classModel;
        $prop_1 = static::$prop_1;
        $prop_2 = static::$prop_2;
        $prop_3 = static::$prop_3;
        $value = $_GET['val'];
        $items = $class::getOneByColumn('title',$value)[0];

        if(isset($_POST['update'])){
            $items->$prop_1 = $_POST[$prop_1];
            $items->$prop_2 = $_POST[$prop_2];
            $items->$prop_3 = $_POST[$prop_3];
            if($_FILES['pic']['error'] == 0){
                $temp = $_FILES['pic']['tmp_name'];
                $new_name = time() .".". explode('.', $_FILES['pic']['name'])[1];
                move_uploaded_file($temp,"img/" . static::$img_folder . $new_name);
                $items->img_url = "img/" . static::$img_folder . $new_name;
            }
            //var_dump($items); die;
            $items->update();
        }
        if(isset($_POST['delete'])){
            unlink($items->img_url);
            $items->delete();
        }

        $view = new View();
        $view->items = $items;
        $view->display(static::$dir_view . '/one_edit.php');

    }

}