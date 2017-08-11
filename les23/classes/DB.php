<?php

class DB
{

    public $db;

    public function __construct($host, $dbname)
    {
        $this->db = new PDO('mysql:host='.$host.';dbname='.$dbname,'root','');
    }

    public function getAllFromDb($sql, $class = "stdClass"){//по умолчанию стандартный класс
        $this->db->exec("SET NAMES UTF8");
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $class);//получаем объект заданного класса. Если не указан, то stdClass
    }

    public function getOneFromDb($sql, $class = "stdClass"){

        return $this->getAllFromDb($sql, $class)[0];//используем функцию получения всех записей, из ее результата
    }//берем первый объект в массиве. Запрос к базе будет передаваться в контроллере. Там будет запрос по id и,
    //соответственно, в массиве будет одна запись. id получим из массива $_GET['id'] при формировании запроса к базе
    //данных на уровень выше (News.php)
}