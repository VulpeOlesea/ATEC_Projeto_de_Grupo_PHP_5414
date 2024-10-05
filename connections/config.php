<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'editora';

$conn = mysqli_connect($host, $user, $pw, $db);
mysqli_set_charset($conn, "UTF8");

if (!$conn) {
	die("Erro de Ligação: ".mysqli_connect_error());
}

?>