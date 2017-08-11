<?php
require_once __DIR__.'/model.php';

$news = News::getAll();

include __DIR__.'/view.php';