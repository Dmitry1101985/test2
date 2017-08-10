<?php
class Article{
    public $title;
    public $text;
    public $author;

    public function __construct($title, $text, $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function view(){
        echo $this->title . "<br/>";
        echo $this->text . "<br/>";
        echo $this->author . "<br/>";
    }
}

/*
$art = new Article(); // т.к есть конструктор, то при инициализации нужно
$art->title = "Title";// использовать его. Вот такая запись вызовет
$art->text = "This is some large text? you know...";// предупреждение!!!
$art->author = "Me";

$art->view();
*/
$art2 = new Article('Title 2', 'Very, very large texxxxxxt...', 'Me against...');
$art2->view();