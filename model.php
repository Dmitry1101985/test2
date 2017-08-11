<?php
require_once __DIR__.'/db.php';

class News{
    public $id;
    public $text;
    public $title;
    public $author;

    public static function getAll(){
        $connect = new DB("localhost","news");
        return $connect->getAllFromDb("SELECT * FROM articles", "News");//Задаем, объекты какого клаcса хотим получить.
    }
}