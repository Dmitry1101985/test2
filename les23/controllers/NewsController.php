<?php
//require_once __DIR__.'/../models/NewsModel.php';
class NewsController extends AbstractController
{
    protected static $classModel = "NewsModel";
    protected static $dir_view = "news";
    protected static $prop_1 = "title";
    protected static $prop_2 = "text";
    protected static $prop_3 = "author";


    /*
     * В данном случае мы подключены к модели-классу News в файле NewsModel.php
     * Метод actionAll() использует статический метод (используется без создания объекта)
     * класса News. Так же этот метод подключает вьюшку.
     */


}