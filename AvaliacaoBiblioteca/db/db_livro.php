<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'db_biblioteca';

$conn = new mysqli($server_name, $user_name, $password, $db);

if($conn->connect_error){
    die("Erro na conexão: " . $conn->connect_error);
}

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$dataPublicacao = $_POST['data_publicacao'];
$dataChegada = $_POST['data_chegada'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];

?>