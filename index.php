<?php

session_start();

$page = $_SERVER['REQUEST_URI'];
$page = ltrim($page, '/');
$page === '' ? $page = 'home' : $page = $page;

include 'partials/header.php';

$file = 'pages/' . $page . '.php';
if (!(file_exists($file))) {
	$page === '' ? $page = 'home' : $page = '404';
	$file = 'pages/404.php';
} 

include $file;

include 'partials/footer.php';
