<?php 

$data = pagination("blogs");

$blogs = $data[0];
$totalPage = $data[1];
$pageActuelle = $data[2];

require_once("views/blog.php");