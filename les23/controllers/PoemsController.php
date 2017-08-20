<?php

class PoemsController extends AbstractController
{
    protected static $classModel = "PoemsModel";
    protected static $dir_view = "poems";
    protected static $prop_1 = "title";
    protected static $prop_2 = "text";
    protected static $prop_3 = "author";
    protected static $img_folder = "img_poems/";
}