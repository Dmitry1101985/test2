<?php
class Db {
    public $host;
    public $dbname;
    public $sql;


    public function __construct($host, $dbname ,$sql)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->sql = $sql;

    }

    public function getFromDb(){

        $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,'root','');
        $db->exec("SET NAMES UTF8");
        $query = $db->prepare($this->sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}

//$connect = new Db("localhost","news","SELECT * FROM articles");
//$news = $connect->getFromDb();
//var_dump($news);

//$con = new Db("localhost", "news", "SELECT * FROM poems");
//$poems = $con->getFromDb();
//var_dump($poems);