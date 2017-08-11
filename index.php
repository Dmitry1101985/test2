<?php
require __DIR__.'/db.php';

$connect = new Db("localhost","news","SELECT * FROM articles");
$news = $connect->getFromDb();

include __DIR__.'/view.php';