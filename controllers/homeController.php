<?php

$chambres = recupererTousLesChambres();
$blogs = listeDesBlogs();
require_once("views/home.php");
