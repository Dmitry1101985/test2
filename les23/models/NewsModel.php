<?php
//require_once __DIR__.'/../classes/DB.php';

class NewsModel extends AbstractModel {
    /*
    public $id;
    public $text;
    public $title;
    public $author;
    */
    /*
     * не используем публичные свойства т.к. в абстрактной модели используем
     * геттер и сеттер. Иначе он не будет работать, и во внутренний защищенный массив
     * ничего не попадет.
     */

    protected static $table = "articles";
    protected static $class = "NewsModel";
    protected static $bd_table = "news";

    /*
    public static function getAll(){
        $db = new DB('localhost','news');
        return $db->getAllFromDb("SELECT * FROM articles", "News");
    }
    */
    //перенесли в абстрактный класс


    /*
     * Модель подключена к служебному классу DB, который напрямую работает с базой.
     * В данном методе мы используем метод класса DB для получения всех полей.
     * Указывается хостинг, название базы данных (в конструкторе при создании объекта).
     * В параметрах метода пишем sql-запрос и указываем класс, к которому будут принадлежать
     * полученные объекты
     */

    /*
    public static function getOne($id){
        $db = new DB('localhost','news');// id мы получим от пользователя через ГЕТ
        return $db->getOneFromDb("SELECT * FROM articles WHERE id=".$id, "News");
    }
    */
    //перенесли в абстрактный класс
}