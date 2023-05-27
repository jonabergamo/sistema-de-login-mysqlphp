<?php

$hostname = "localhost";
$database = "login";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $database);
if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . mysqli->error);
}