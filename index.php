<?php
require __DIR__.'/db.php';

$connect = new DB("localhost","news");
$news = $connect->getAllFromDb("SELECT * FROM articles");

include __DIR__.'/view.php';