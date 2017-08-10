<?php
class Article{
    public $title;
    public $text;
    public $author;

    public function view(){
        echo $this->title . "<br/>";
        echo $this->text . "<br/>";
        echo $this->author . "<br/>";
    }
}

$art = new Article();
$art->title = "Title";
$art->text = "This is some large text? you know...";
$art->author = "Me";

$art->view();