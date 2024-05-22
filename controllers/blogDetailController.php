<?php 

$b = recupererUnBlog($_GET["id"]);
$blogs = listeDesBlogs();
require_once("views/blogDetail.php");