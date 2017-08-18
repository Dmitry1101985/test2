<?php

class DB
{

    public $dbh;

    public function __construct($host, $basename)
    {
        $this->dbh = new PDO('mysql:host='.$host.';dbname='.$basename,'root','');
    }

    public function query($sql, $class = "stdClass", $params = []){//по умолчанию стандартный класс
        $this->dbh->exec("SET NAMES UTF8");
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);//получаем объект заданного класса. Если не указан, то stdClass
    }

    /*
    public function getOneFromDb($sql, $class = "stdClass"){

        return $this->getAllFromDb($sql, $class)[0];//используем функцию получения всех записей, из ее результата
    }//берем первый объект в массиве. Запрос к базе будет передаваться в контроллере. Там будет запрос по id и,
    //соответственно, в массиве будет одна запись. id получим из массива $_GET['id'] при формировании запроса к базе
    //данных на уровень выше (NewsModel.php)
    */

    public function execute($sql, $params = []){
        $this->dbh->exec("SET NAMES UTF8");
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function queryArr($sql){
        $this->dbh->exec("SET NAMES UTF8");
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}