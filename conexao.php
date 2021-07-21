<?php 

session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "bingo";

//Conexão MYSQLI Estrutural
$conecta = mysqli_connect($localhost, $user, $pass, $banco);
mysqli_set_charset($conecta, "utf8");

 ?>